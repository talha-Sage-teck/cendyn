<?php

// Prevent direct access to the script
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

// Include necessary files for cURL requests and data handling
require_once ('custom/pushtechCurlRequest.php');
require_once ('custom/pushtechCurlDataHandler.php');

// Register the job string for the scheduler
$job_strings[] = 'syncContactsDataServicePushtech';

// Function to get contact data from PushTech by contact ID
function getContactByIdPushtech($contactID)
{
    global $sugar_config;

    // Construct the URL for the GET request
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_contacts/" . $contactID;

    // Initialize the cURL request
    $curlRequest = new pushtechCurlRequest($url, [
        'module' => 'Contacts',
        'action' => 'Get Contact',
        'record_id' => $contactID,
    ]);

    // Execute the request and return the response
    $response = $curlRequest->executeCurlRequest("GET");

    return $response;
}

function deleteAllAccountsPushtech($contactID)
{
    global $sugar_config, $db;

    // Fetch the most recent externalAccountID for the given contactID
    $query = "SELECT ac.account_id FROM accounts_contacts ac WHERE ac.contact_id = '{$contactID}' AND ac.deleted = 1 ORDER BY ac.date_modified DESC LIMIT 1";
    
    $result = $db->query($query);
    $row = $db->fetchByAssoc($result);

    // Use the fetched account ID or return false if it is empty
    if (empty($row['account_id'])) {
        return true; // No account ID found, so return false
    }
    $externalAccountId = $row['account_id'];

    // Prepare the payload with the fetched externalAccountID
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_company_contact_map";
    $payload = [
        'module' => 'Contacts',
        'action' => 'Update Contacts', // Since we're marking accounts as inactive
        'record_id' => $contactID,
        'externalContactId' => $contactID,
        'externalAccountId' => $externalAccountId,
        'inactive' => 1, // Mark all accounts linked to the contact as inactive
    ];

    $curlRequest = new pushtechCurlRequest($url, $payload);

    return $curlRequest->executeCurlRequest("POST", $payload);
}

// Function to add accounts to a contact in PushTech
function addAccountsToContactPushtech($accountsArr, $contactBean)
{
    
    global $sugar_config;

    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_company_contact_map";


     // Prepare the data array with the necessary fields
    
        $dataAcc = [
            'externalContactId' => $contactBean->id,
            'externalAccountId' => $accountsArr->id,
            "inactive" => $accountsArr->deleted,
            "dateModifiedSuiteCrm" => $accountsArr->date_modified
        ];

    $curlRequest = new pushtechCurlRequest($url, [
        'module' => 'Contacts',
        'action' => 'Create Contact',
        'record_id' => $contactBean->id,
        'header' => array(
        ),
    ]);

    return $curlRequest->executeCurlRequest("POST", $dataAcc);

}


// Function to synchronize accounts linked to a contact in PushTech
function syncAccountsPushtech($accounts, $contactBean)
{
    // First, mark all linked accounts as inactive
    if (deleteAllAccountsPushtech($contactBean->id)) {
        // Then, add the accounts back to the contact
        return addAccountsToContactPushtech($accounts, $contactBean);
    }
    return false;
}


// Function to mark a contact as inactive in PushTech
function deleteContactPushtech($contact_id, $data): array
{
    global $sugar_config;

    // Construct the URL for the POST request
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_contacts/";

    // Prepare the payload for marking the contact as inactive
    $payload = [
        'module' => 'Contacts',
        'action' => 'Update Contacts',
        'record_id' => $contact_id,
        'inactive' => 1, // Mark the contact as inactive
        'emails' => [],  // Initialize the emails array
    ];

    // Initialize the cURL request
    $pushtechCurlRequest = new pushtechCurlRequest($url, $payload);

    // Log the action for debugging
    //$GLOBALS['log']->fatal("Attempting to delete account with ID: " . $contact_id);

    // Execute the request and return the response
    $response = $pushtechCurlRequest->executeCurlRequest("POST", $data);

    return $response;
}


// Function to create or update contact data in PushTech
function sendContactDataPushtech($data, $contact_id = null): array
{
    global $sugar_config;

    // Construct the URL for the POST request
    $url = $sugar_config['PUSHTECH_API_ENDPOINT'] . "/v2/account/" . $sugar_config['PUSHTECH_API_COMPANY_ID'] . "/suite_crm_contacts/";

    // Initialize the cURL request
    $curlRequest = new pushtechCurlRequest($url, [
        'module' => 'Contacts',
        'action' => (($contact_id != null) ? 'Update Contact' : 'Create Contact'),
        'record_id' => ($data['externalContactId']) ? $data['externalContactId'] : $contact_id,
    ]);

    // Execute the request and return the response
    $response = $curlRequest->executeCurlRequest("POST", $data);
   
    return $response;
}


function syncContactsDataServicePushtech()
{
    global $db, $timedate;

    // Query to select contacts that need synchronization
    $selectQuery = "SELECT * FROM contacts WHERE (deleted = 0 AND ready_to_sync > 0) OR (deleted = 1 AND ready_to_sync = 3)";
    $resultSelect = $db->query($selectQuery);

    // Loop through each contact that needs synchronization
    while ($contactRow = $db->fetchByAssoc($resultSelect)) {
        // Load the contact bean using the contact ID
        $contactBean = BeanFactory::getBean('Contacts', $contactRow['id'], [], false);
        $emailAddresses = [];

        // Collect email addresses if they exist
        if ($contactBean->emailAddress) {
            foreach ($contactBean->emailAddress->addresses as $email) {
                if (!empty($email['email_address'])) {
                    $emailAddresses[] = [
                        'email' => $email['email_address'],
                        'isPrimary' => $email['primary_address'],
                    ];
                }
            }
        }

        // Prepare the contact data array to be sent to PushTech
        $data = [
            'externalContactId' => $contactBean->id,
            'firstname' => $contactBean->first_name,
            'lastname' => $contactBean->last_name,
            'salutation' => $contactBean->salutation,
            'language' => $contactBean->b2b_language,
            'priority' => $contactBean->priority,
            'jobTitle' => $contactBean->title,
            'department' => $contactBean->department,
            'influence' => $contactBean->b2b_influencer,
            'reportsTo' => $contactBean->reports_to_id,
            'officePhone' => $contactBean->phone_work,
            'mobile' => $contactBean->phone_mobile,
            'booker' => $contactBean->b2b_is_booker,
            'address1' => $contactBean->primary_address_street,
            'city' => $contactBean->primary_address_city,
            'state' => $contactBean->primary_address_state,
            'country' => $contactBean->primary_address_country,
            'postalCode' => $contactBean->primary_address_postalcode,
            'alternateAddress1' => $contactBean->alt_address_street,
            'alternateAddressCity' => $contactBean->alt_address_city,
            'alternateAddressState' => $contactBean->alt_address_state,
            'alternateAddressCountry' => $contactBean->alt_address_country,
            'alternateAddressPostalCode' => $contactBean->alt_address_postalcode,
            'birthDate' => $contactBean->birthdate,
            'assignedUserId' => $contactBean->assigned_user_id,
            'interests' => $contactBean->b2b_interests,
            'inactive' => $contactBean->deleted,
            'status' => $contactBean->status,
            'emails' => $emailAddresses
        ];

        // Prepare accounts data if the contact is not marked for deletion
        $accounts = [];
        if ($contactRow['ready_to_sync'] != 3) {
            $contactBean->load_relationship("accounts");
            foreach ($contactBean->accounts->getBeans() as $accountBean) {
                $accounts[] = [
                    "externalContactId" => $contactBean->id,
                    "externalAccountId" => $accountBean->id,
                    "inactive" => $accountBean->deleted,
                    "dateModifiedSuiteCrm" => $accountBean->date_modified
                ];
            }
            $data['accounts'] = $accounts;
        }
        // Determine the synchronization action based on the ready_to_sync value
        $res = null;
        $deleted = false;
        switch ($contactRow['ready_to_sync']) {
            case 1: // Create contact
                if (!empty($data['accounts'])) {
                    $res = addAccountsToContactPushtech($accountBean, $contactBean);
                    if($res['errorcode']==400){
                        break;
                    }
                }
                $res = sendContactDataPushtech($data);
                break;
            case 2: // Update contact
                $res = sendContactDataPushtech($data, $data['externalContactId']);
                if ($res['errorcode'] == 404) {
                    $res = sendContactDataPushtech($data); // Retry without ID if not found
                }
                break;
            case 3: // Delete contact
                $deleted = true;
                $res = deleteContactPushtech($data['externalContactId'], $data);
                break;
            case 4: // Sync accounts linked to contact
                if (sizeof($data['accounts']) > 0) {
                    $res = syncAccountsPushtech($accountBean, $contactBean);
                    if($res['errorcode']==400){
                        break;
                    }
                } else {
                    $res = deleteAllAccountsPushtech($contactBean->id);
                }
                $res = sendContactDataPushtech($data, $data['externalContactId']);
                break;
            default: // If none of the cases match, return true
                return true;
        }

        // If deletion was successful, update the ready_to_sync flag and last_sync_date
        if (($res['errorcode'] == 200 || $res['errorcode'] == 201) && $deleted) {

            // Update query to reset ready_to_sync and last_sync_date for the deleted contact
            $updateQuery = "UPDATE contacts SET ready_to_sync = 0, last_sync_date = '{$timedate->nowDb()}' WHERE id = '{$contactBean->id}' AND ready_to_sync = 3";
            $db->query($updateQuery);
        }

        // If synchronization was successful, update the local contact record
        if (in_array($res['errorcode'], [200, 201])) {
            $contactBean->ready_to_sync = 0;
            $contactBean->last_sync_date = $GLOBALS['timedate']->nowDb();
            $contactBean->skipBeforeSave = true;
            $contactBean->save();

            // Resolve any errors related to specific fields if they exist
            $errorNameArray = [ "Empty Field Error", "Account Not Synced", "JSON Format Error", "Invalid Company ID", "Authorization Failure", "Invalid API Route", "Invalid API Endpoint"];
            $dataHandler = new pushtechCurlDataHandler();
            $dataHandler->resolveErrorWithName($errorNameArray, $contactBean->id);  
        }
    }

    return true;
}

