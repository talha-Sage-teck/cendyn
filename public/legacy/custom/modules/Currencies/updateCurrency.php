<?php
if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

$currency_id = $_REQUEST['currencyID'];
$exchange_rate = $_REQUEST['exchangeRate'];

global $db;

/// Specify the tables and fields to update
$updates = [
    'aos_contracts' => 'total_contract_value_usdollar',
    'opportunities' => 'amount_usdollar'
];
$tableResult = $db->query($tableQuery);

foreach ($updates as $tableName => $fieldName) {
    // Create the base field name by removing the "_usdollar" suffix
    $baseFieldName = str_replace('_usdollar', '', $fieldName);

    // Update the specified field for the current currency_id
    $updateQuery = "UPDATE {$tableName}
                    SET {$fieldName} = ROUND({$baseFieldName}/{$exchange_rate}, 6)
                    WHERE currency_id = '{$currency_id}'";
    $db->query($updateQuery);
}

echo "Process completed!";
