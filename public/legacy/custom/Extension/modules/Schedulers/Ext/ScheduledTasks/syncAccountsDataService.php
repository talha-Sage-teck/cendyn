<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'syncAccountsDataService';

function getAccountById($accountID) {
    /***
     * @Input:
     * $contactId: ID of the account to get
     * @Output
     * Return associative array form of the JSON response
     */
    global $sugar_config;

    $endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BAccounts/"
        . $accountID;
    $curl = curl_init();
    $object = array(
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
        ),
    );
    curl_setopt_array($curl, $object);
    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        $GLOBALS['log']->debug('CURL ERROR -> : ' . print_r(curl_error($curl), 1));
    }
    curl_close($curl);
    return json_decode($response);
}

function accountExists($accountID): bool {
    /***
     * Checks if account is available on eInsight
     * @Input:
     * $accountID: ID of the account to get
     * @Output
     * Return true or false
     */
    $account = getAccountById($accountID);
    return !($account->status && $account->status != 200);
}


function deleteAccount($accountID) {
    /*     * *
     * @Input:
     * accountID: ID of account to delete
     * @Output:
     * Return true or false
     */

    global $sugar_config;
    $endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BAccounts" .
        "/delete/" . $accountID;
    return sendPostData($endpoint, null, 'Content-Length: 0');
}

function addAccountData($data, $account_id = null) {

    /*     * *
     * @Input:
     * data: The Account data to send to eInsight
     * account_id: Optional, if value is set than eInsight account update endpoint will be called with this argument's
     * value, otherwise create endpoint is called
     * @Output:
     * Return true or false
     */

    global $sugar_config;
    $endpoint = "{$sugar_config['EINSIGHT_API_ENDPOINT']}/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BAccounts" .
            (($account_id != null) ? '/update/' . $account_id : '');
    return sendPostData($endpoint, $data);
}

function syncAccountsDataService() {

    /**
     *  This scheduler runs every 10 minutes and syncs with eInsight
     * @Conditions:
     * 1. The ready_to_sync flag is 1 (created account), or
     * 2. The ready_to_sync flag is 2 (updated account)
     * 3. The ready_to_sync flag is 3 (deleted account)
     * @Actions:
     * 1. Unsets the ready_to_sync flag
     * 2. Prepares the POST data of all accounts to send to eInsight.
     * 3. Sets the last_sync_datetime field
     * @Returns
     * true
     */
    //Fetching all the accounts that are either created or updated
    global $db;
    $selectQuery = "SELECT * FROM accounts WHERE (deleted = 0 AND ready_to_sync > 0) OR (deleted = 1 AND ready_to_sync = 3)";
    $resultSelect = $db->query($selectQuery);

    //Looping over all the fetched accounts
    while ($accountRow = $db->fetchByAssoc($resultSelect)) {
        //setting the last_sync_date field
        $accountBean = BeanFactory::getBean('Accounts', $accountRow['id'], [], false);
        $accountBean->last_sync_date = $GLOBALS['timedate']->nowDb();

        //making the data object to send to eInsight
        $data = array(
            'externalAccountId' => $accountBean->id,
            'source' => 'SuiteCRM',
//            'externalParentAccountId' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
            // TBD
            'externalParentAccountId' => $accountBean->parent_id,
            'accountName' => $accountBean->name,
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
            'updateDate' => $accountBean->last_sync_date,
            'id' => 0,
            'inactive' => $accountBean->deleted,
        );

        //check value of ready_to_sync flag and call API endpoint accordingly
        $res = false;
        $deleted = false;
        switch ($accountRow['ready_to_sync']) {
            case 1:
                $data['insertDate'] = $accountBean->last_sync_date;
                $res = addAccountData($data);
                break;
            case 2:
                if(accountExists($data['externalAccountId'])) {
                    $data['id'] = $accountBean->einsight_account_id ?? 0;
                    $res = addAccountData($data, $data['externalAccountId']);
                }
                else {
                    $data['insertDate'] = $accountBean->last_sync_date;
                    $res = addAccountData($data);
                }
                break;
            case 3:
                $deleted = true;
                if(accountExists($data['externalAccountId'])) {
                    $res = deleteAccount($data['externalAccountId']);
                }
                else {
                    $res = true;
                }
                break;
            default:
                $GLOBALS['log']->debug("syncAccountsDataService: Unexpected sync flag value in scheduler.");
                return true;
        }

        if($res && $deleted)
            unsetFlagAfterDelete($accountBean->id, 'accounts');

        //unsetting the read_to_sync flag, setting the skipBeforeSave flag and saving
        if ($res)
            $accountBean->ready_to_sync = 0;
        $accountBean->skipBeforeSave = true;
        $accountBean->save();
    }

    return true;
}
