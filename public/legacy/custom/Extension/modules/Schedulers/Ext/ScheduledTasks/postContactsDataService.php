<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$job_strings[] = 'postContactsDataService';

function getContactById($contactID) {
    /***
     * @Input:
     * $contactId: ID of the contact to get
     * @Output
     * Return associative array form of the JSON response
     */
    global $sugar_config;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts/"
        . $contactID;
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
        $GLOBALS['log']->fatal('CURL ERROR -> : ' . print_r(curl_error($curl), 1));
    }
    curl_close($curl);
    return json_decode($response);
}

function sendPostData($endpoint, $postData = null, $content_length = null) {
    /***
     * @Input:
     * $endpoint: Endpoint URL of the function in eInsight API
     * $postData: Optional, post data to send
     * @Output
     * Return true if successfully deleted, otherwise false
     */
    global $sugar_config;
    $curl = curl_init();
    $object = array(
        CURLOPT_URL => $endpoint,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            'X-Api-Key: ' . $sugar_config['EINSIGHT_API_KEY'],
            'Content-Type: application/json',
            $content_length
        ),
    );

    if($postData)
        $object[CURLOPT_POSTFIELDS] = json_encode($postData, JSON_NUMERIC_CHECK);

    curl_setopt_array($curl, $object);
    $response = curl_exec($curl);
    if (curl_errno($curl)) {
        $GLOBALS['log']->fatal('CURL ERROR -> : ' . print_r(curl_error($curl), 1));
    }
    curl_close($curl);
    if ($response != "") {
        $GLOBALS['log']->fatal($response);
        return false;
    }
    return true;
}

function deleteAllAccounts($contactID) {
    /***
     * @Input:
     * $contactID: The contact whose email we want to delete
     * @Output
     * Return true if successfully deleted, otherwise false
     */

    global $sugar_config;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        '/deleteAllAccount/' . $contactID;
    return sendPostData($endpoint, null, 'Content-Length: 0');
}

function addAccountsToContact($accountsArr, $contactBean) {
    /***
     * @Input:
     * $accountsArr: Accounts array to send to eInsight
     * $contactBean: The contact to attach the email to in eInsight
     * @Output:
     * Return true if successfully deleted, otherwise false
     */

    global $sugar_config;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        '/insertAccount/' . $contactBean->id;
    return sendPostData($endpoint, $accountsArr);
}

function addEmailsToContact($emailsArr, $contactBean) {
    /***
     * @Input:
     * $emailArr: Emails array to send to eInsight
     * $contactBean: The contact to attach the email to in eInsight
     * @Output:
     * Return true if successfully deleted, otherwise false
     */

    global $sugar_config;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        '/insertEmail/' . $contactBean->id;
    return sendPostData($endpoint, $emailsArr);
}

function syncAccounts($accounts, $contactBean) {
    /***
     * @Input:
     * $accounts: Accounts array to send to eInsight
     * $contactBean: The contact whose email we want to update in eInsight
     * @Output:
     * Return true if successfully deleted, otherwise false
     */

    if(deleteAllAccounts($contactBean->id)) {
        return addAccountsToContact($accounts, $contactBean);
    }
    return false;
}

function deleteEmailFromContact($email, $contactBean) {
    /***
     * @Input:
     * $emails: Emails array to delete from eInsight
     * $contactBean: The contact whose email we want to update in eInsight
     * @Output:
     * Return true if successfully deleted, otherwise false
     */

    global $sugar_config;

    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        '/delete/' . $contactBean->id . '/email/' . $email;
    return sendPostData($endpoint, null, 'Content-Length: 0');
}

function emailsNeedToBeDeleted($emailsArr, $contactBean) {
    /***
     * @Input:
     * $emails: Emails array to send to eInsight
     * $contactBean: Contact bean that the email(s) are related to
     * @Output:
     * Return true or false
     */

    $eInsightCall = getContactById($contactBean->id);
    if($eInsightCall->status && $eInsightCall->status != 200)
        return true;

    $eInsightMails = $eInsightCall->data->emails;
    $emails = array();
    foreach($emailsArr as $email) {
        $shouldDelete = false;
        foreach ($eInsightMails as $eInsightMail) {
            if(strtolower($eInsightMail->email) == strtolower($email['email'])) {
                if ($eInsightMail->emailContactMapping->inactive == 0 && $email['emailContactMapping']['inactive'] == "1") {
                    $shouldDelete = true;
                }
            }
        }
        if($shouldDelete)
            $emails[] = $email;
    }

    $res = true;
    foreach($emails as $email)
        $res = $res && deleteEmailFromContact($email['email'], $contactBean);

    return $res;
}

function emailsNeedToBeAdded($emailsArr, $contactBean) {
    /***
     * @Input:
     * $emails: Emails array to send to eInsight
     * $contactBean: Contact bean that the email(s) are related to
     * @Output:
     * Return true or false
     */

    $eInsightCall = getContactById($contactBean->id);
    if($eInsightCall->status && $eInsightCall->status != 200)
        return true;

    $eInsightMails = $eInsightCall->data->emails;
    $emails = array();
    foreach($emailsArr as $email) {
        if($email['emailContactMapping']['inactive'] == "1")
            continue;
        $present = false;
        foreach ($eInsightMails as $eInsightMail) {
            if(strtolower($eInsightMail->email) == strtolower($email['email'])) {
                $present = true;
                if ($eInsightMail->emailContactMapping->inactive == 1) {
                    $present = false;
                }
            }
        }
        if(!$present)
            $emails[] = $email;
    }

    if(sizeof($emails) > 0)
        return addEmailsToContact($emails, $contactBean);
    else
        return true;
}

function deleteContact($contact_id): bool {

    /***
     * @Input:
     * contact_id: Contact ID to delete
     * @Output:
     * Return true if successfully deleted, otherwise false
     */

    global $sugar_config;
    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        '/delete/' . $contact_id;
    return sendPostData($endpoint, null, 'Content-Length: 0');
}

function sendContactData($data, $contact_id = null): bool {

    /***
     * @Input:
     * data: The Contact data to send to eInsight
     * contact_id: Optional, if value is set than eInsight account update endpoint will be called with this argument's
     * value, otherwise create endpoint is called
     * @Output:
     * Return true if successfully added the account, otherwise false
     */

    global $sugar_config;
    $endpoint = "https://eu02b2bapi.cendyn.com/api/v{$sugar_config['EINSIGHT_API_VERSION']}/companyid/{$sugar_config['EINSIGHT_API_COMPANY_ID']}/b2b/B2BContacts" .
        (($contact_id != null) ? '/update/' . $contact_id : '/insert');
    return sendPostData($endpoint, $data);
}

function deleteDups(&$array, $email) {

    /***
     * Deletes duplicate instances of the provided email
     * @Input:
     * &$array: emails array to change
     * $email: Target email to check against
     * @Output:
     * Returns the edited array
     */

    $subkey = "email";
    $array = array_filter($array, function ($v) use (&$array, $subkey, $email) {
        if (!array_key_exists($subkey,$v))
            return false;
        if ($v[$subkey] == $email)
            return false;
        else
            return true;
    });
    $newArr = array_values($array);
    return $newArr;
}

function unsetFlagAfterDelete($id, $table) {

    /***
     * Unsets the ready_to_sync flag for given module
     * @Input:
     * $id: ID of the record
     * $table: Table where the ID is present
     * @Output:
     * Returns true or false
     */

    global $db;
    $updateQuery = "UPDATE {$table} SET ready_to_sync=0 WHERE id='{$id}' AND ready_to_sync=3";
    $updateResult = $db->query($updateQuery);
    if($updateResult)
        return true;
    else
        return false;
}

function syncContactsDataService() {

    /**
     *  This scheduler runs every 10 minutes and syncs with eInsight
     * @Condition:
     * Process only the contacts;
     * 1. that are not deleted and have a positive int in ready_to_sync flag
     * 2. that are deleted and have 3 in ready_to_sync flag
     * @Actions:
     * ready_to_sync value      Action
     * 1                        New contact created
     * 2                        Contact value updated (other than email and account relationships)
     * 3                        Contact deleted
     * 4                        Sync Accounts
     * 5                        Sync emails, special case.
     * @Returns
     * true
     */

    //Fetching all the accounts that are either created or updated
    global $db;
    $selectQuery = "SELECT * FROM contacts WHERE (deleted = 0 AND ready_to_sync > 0) OR (deleted = 1 AND ready_to_sync = 3)";
    $resultSelect = $db->query($selectQuery);

    //Looping over all the fetched accounts
    while ($contactRow = $db->fetchByAssoc($resultSelect)) {
        //setting the last_sync_date field
        $contactBean = BeanFactory::getBean('Contacts', $contactRow['id'], [], false);

        //making the data object to send to eInsight
        $data = array(
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
        );

        // don't bother extracting the data for emails and accounts if we want to delete the contact
        if($contactRow['ready_to_sync'] != 3) {
            //getting email data
            $emails = array();
            $emailRelSelectQuery = "SELECT * FROM email_addr_bean_rel WHERE bean_id='{$contactBean->id}' AND bean_module='Contacts'";
            $emailRelSelectResult = $db->query($emailRelSelectQuery);
            while ($emailRel = $db->fetchByAssoc($emailRelSelectResult)) {
                $emailSelectQuery = "SELECT * FROM email_addresses WHERE id='{$emailRel['email_address_id']}'";
                $emailSelectResult = $db->query($emailSelectQuery);
                while ($email = $db->fetchByAssoc($emailSelectResult)) {
                    $emailData = array(
                        'email' => "{$email['email_address']}",
                        "invalidEmail" => $email['invalid_email'],
                        "optOut" => $email['opt_out'],
                        "inactive" => $email['deleted'],
                        "emailContactMapping" => array(
                            "module" => "{$emailRel['bean_module']}",
                            "isPrimary" => $emailRel['primary_address'],
                            "inactive" => $emailRel['deleted']
                        ),
                    );
                    $emails = deleteDups($emails, $emailData['email']);
                    $emails[] = $emailData;
                }
            }

            //No need to include the previously deleted emails
            $data['emails'] = json_decode(json_encode($emails), true);


            //getting accounts data
            $accounts = array();
            $contactBean->load_relationship("accounts");
            $accountBeans = $contactBean->accounts->getBeans();
            foreach ($accountBeans as $accountBean) {
                $accountsData = array(
                    "externalAccountId" => $accountBean->id,
                    "inactive" => $accountBean->deleted,
                    "dateModifiedSuiteCrm" => $accountBean->date_modified
                );
                $accounts[] = $accountsData;
            }
            $data['accounts'] = $accounts;
        }

        //check value of ready_to_sync flag and call API endpoint accordingly
        $res = false;
        $emailSyncDone = false;
        $deleted = false;
        switch ($contactRow['ready_to_sync']) {
            case 1:
                $res = sendContactData($data);
                break;
            case 2:
                $res = sendContactData($data, $data['externalContactId']);
                break;
            case 3:
                $emailSyncDone = true;
                $deleted = true;
                $res = deleteContact($data['externalContactId']);
                break;
            case 4:
                if(sizeof($data['accounts']) > 0)
                    $res = syncAccounts($data['accounts'], $contactBean);
                else
                    $res = deleteAllAccounts($contactBean->id);
                if($res)
                    $contactBean->ready_to_sync = 2;
                $res = sendContactData($data, $data['externalContactId']);
                break;
            case 5:
                $emailSyncDone = true;
                $res = emailsNeedToBeAdded($data['emails'], $contactBean) &&
                    emailsNeedToBeDeleted($data['emails'], $contactBean);
                break;
            default:
                $GLOBALS['log']->fatal("postContactsDataService: Unexpected sync flag value in scheduler.");
                return true;
        }

        if ($res && !$emailSyncDone) {
            $contactBean->ready_to_sync = 5;
            $res = emailsNeedToBeAdded($data['emails'], $contactBean) &&
                emailsNeedToBeDeleted($data['emails'], $contactBean);
        }

        //manually (sql query) set the ready_to_save to 3 after delete because $bean->save() does not work
        if($res && $deleted)
            unsetFlagAfterDelete($contactBean->id, 'contacts');

        //unsetting the read_to_sync flag, setting the fromScheduler flag and saving
        if($res) {
            $contactBean->ready_to_sync = 0;
            $contactBean->last_sync_date = $GLOBALS['timedate']->nowDb();
        }

        $contactBean->skipBeforeSave = true;
        $contactBean->save();
    }

    return true;
}
