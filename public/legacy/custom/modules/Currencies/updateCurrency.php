<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$currency_id = $_REQUEST['currencyID'];
$exchange_rate = $_REQUEST['exchangeRate'];

global $db;

//Get all tables with fields that have "_usdollar" in the name
$tableQuery = "SELECT DISTINCT TABLE_NAME 
                FROM INFORMATION_SCHEMA.COLUMNS 
                WHERE COLUMN_NAME LIKE '%_usdollar'";


$tableResult = $db->query($tableQuery);
while ($tableRow = $db->fetchByAssoc($tableResult)) {
    $tableName = $tableRow['TABLE_NAME'];

    // Get the "_usdollar" fields for the current table
    $fieldsQuery = "SELECT COLUMN_NAME 
                    FROM INFORMATION_SCHEMA.COLUMNS
                    WHERE TABLE_NAME = '{$tableName}' 
                    AND COLUMN_NAME LIKE '%_usdollar'";
    $fieldsResult = $db->query($fieldsQuery);

    if ($fieldsResult->num_rows > 0) {
        while ($fieldRow = $db->fetchByAssoc($fieldsResult)) {
            $fieldName = $fieldRow['COLUMN_NAME'];
            $baseFieldName = str_replace('_usdollar', '', $fieldName);

            // // Update the "_usdollar" field for the current currency_id
            $updateQuery = "UPDATE {$tableName}
                            SET {$fieldName} = {$baseFieldName}/{$exchange_rate}
                            WHERE currency_id = \"{$currency_id}\"";
            $db->query($updateQuery);
            
        }
    }
}

echo "Process completed!";
