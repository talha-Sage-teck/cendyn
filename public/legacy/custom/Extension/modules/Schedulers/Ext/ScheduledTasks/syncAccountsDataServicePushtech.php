<?php


// Prevent unauthorized access to the script
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Include required custom classes for handling cURL requests and data handling
require_once('custom/pushtechCurlRequest.php');
require_once('custom/pushtechCurlDataHandler.php');

// Register the job string for the scheduler
$job_strings[] = 'syncAccountsDataServicePushtech';

// Function to fetch an account from PushTech API by account ID
function getAccountByIdPushtech($accountID)
{
    global $sugar_config;
    
    // Construct the API URL using the account ID and company ID from the SugarCRM config
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_companies/" . $accountID;

    // Create a new cURL request object
    $pushtechCurlRequest = new pushtechCurlRequest($url);

    // Execute the GET request and return the decoded JSON response
    $response = $pushtechCurlRequest->executeCurlRequest("GET");

    return json_decode($response, true);
}

// Function to check if an account exists in PushTech by checking the response status
function accountExistsPushtech($accountID): bool
{
    // Get the account details from PushTech
    $account = getAccountByIdPushtech($accountID);

    // Return true if the account status is set in the response, indicating it exists
    return isset($account['data']['status']);
}

// Function to mark an account as inactive in PushTech (instead of deleting)
function deleteAccountPushtech($accountID, $data)
{
    global $sugar_config;

    // Construct the API URL for account update
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_companies";

    // Prepare the payload to mark the account as inactive
    $payload = [
        'module' => 'Accounts',
        'action' => 'Update Account',
        'record_id' => $accountID,
        'inactive' => 1, // Set inactive flag to 1
    ];

    // Create a new cURL request object with the payload
    $pushtechCurlRequest = new pushtechCurlRequest($url, $payload);

    // Execute the POST request and return the response
    return $pushtechCurlRequest->executeCurlRequest("POST", $data);
}

// Function to add or update account data in PushTech
function addAccountDataPushtech($data, $account_id = null)
{
    global $sugar_config;

    // Construct the API URL for account creation or update
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_companies";

    // Set the module, action, and record ID based on whether it's an update or create operation
    $data['module'] = 'Accounts';
    $data['action'] = $account_id !== null ? 'Update Account' : 'Create Account';
    $data['record_id'] = ($data['externalAccountId']) ? $data['externalAccountId'] : $account_id;

    // Create a new cURL request object with the data payload
    $pushtechCurlRequest = new pushtechCurlRequest($url, $data);

    // Execute the POST request and return the response
    return $pushtechCurlRequest->executeCurlRequest("POST", $data);
}

// Main function to sync account data between SuiteCRM and PushTech
function syncAccountsDataServicePushtech()
{
    global $db;

    // Query to select accounts that need to be synced (new, updated, or deleted)
    $selectQuery = "SELECT * FROM accounts WHERE (deleted = 0 AND ready_to_sync > 0) OR (deleted = 1 AND ready_to_sync = 3)";
    $resultSelect = $db->query($selectQuery);

    // Loop through each account row from the query result
    while ($accountRow = $db->fetchByAssoc($resultSelect)) {
        $accountBean = BeanFactory::getBean('Accounts', $accountRow['id'], [], false);
        $lastSyncDate = $GLOBALS['timedate']->nowDb(); // Get the current date and time for syncing

        // Prepare the data array for syncing
        $data = array(
            'externalAccountId' => $accountBean->id,
            'source' => 'SuiteCRM',
            'externalParentAccountId' => $accountBean->parent_id,
            'accountName' => trim($accountBean->name),
            'accountBaseType' => $accountBean->account_base_type,
            'accountType' => $accountBean->account_type,
            'billingAddressStreet' => $accountBean->billing_address_street,
            'billingCity' => $accountBean->billing_address_city,
            'billingState' => $accountBean->billing_address_state,
            'billingPostalCode' => $accountBean->billing_address_postalcode,
            'billingCountry' => $accountBean->billing_address_country,
            'phoneOffice' => $accountBean->phone_office,
            'phoneFax' => $accountBean->phone_fax,
            'website' => $accountBean->website,
            'assignedUserId' => $accountBean->assigned_user_id,
            'industry' => $accountBean->industry,
            'iata' => $accountBean->iata,
            'b2bCommission' => $accountBean->b2b_commission,
            'priority' => $accountBean->priority,
            'blacklist' => $accountBean->black_list,
            'blacklistReason' => $accountBean->black_list_reason,
            'annualRevenue' => $accountBean->annual_revenue,
            'description' => $accountBean->description,
            'updateDate' => $lastSyncDate,
            'inactive' => $accountBean->deleted, // Set inactive flag if the account is deleted
            'status' => $accountBean->status,
        );

        $res = false; // Initialize response variable

        // Determine the action based on the ready_to_sync status
        if ($accountRow['ready_to_sync'] == 1) {
            $res = addAccountDataPushtech($data); // Create a new account
        } elseif ($accountRow['ready_to_sync'] == 2) {
            $res = addAccountDataPushtech($data, $accountBean->id); // Update an existing account
        } elseif ($accountRow['ready_to_sync'] == 3) {
            $res = deleteAccountPushtech($accountBean->id, $data); // Mark the account as inactive (delete)
        }

        // Check if the sync operation was successful
        if (isset($res['errorcode']) && ($res['errorcode'] == 200 || $res['errorcode'] == 201)) {
            if ($accountRow['ready_to_sync'] == 3) {
                // Update the database to mark the account as synced and set the last sync date
                $updateQuery = "UPDATE accounts SET ready_to_sync = 0, last_sync_date = '{$lastSyncDate}' WHERE id = '{$accountBean->id}' AND ready_to_sync = 3";
                $db->query($updateQuery);
            } else {
                // Update the accountBean object and save it with the last sync date
                $accountBean->ready_to_sync = 0;
                $accountBean->last_sync_date = $lastSyncDate;
                $accountBean->skipBeforeSave = true;
                $accountBean->save(false);
            }
            // Handle any potential errors related to data fields and resolve them using the data handler
            $errorNameArray = [ "Empty Field Error", "Account Not Synced", "JSON Format Error", "Invalid Company ID", "Authorization Failure", "Invalid API Route", "Invalid API Endpoint"];
            $dataHandler = new pushtechCurlDataHandler();
            $dataHandler->resolveErrorWithName($errorNameArray, $accountBean->id);
        }
    }

    return true; // Return true to indicate successful execution of the sync process
}

