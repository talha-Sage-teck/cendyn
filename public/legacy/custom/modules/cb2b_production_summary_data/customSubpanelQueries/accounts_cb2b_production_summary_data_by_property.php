<?php
$GLOBALS['account_parent']=isset($bean)?$bean:$parentbean;
function get_accounts_cb2b_production_summary_data_by_property() {


    global $sugar_config;
    $column_name='usdollar';
    $column_name2='';
    if(empty($sugar_config['selected_pms_production_data_summary_currency'])||$sugar_config['selected_pms_production_data_summary_currency']=='usd'){
        $column_name='usdollar';
        $column_name2='';

    }
    else{
        $column_name='corporate';
        $column_name2='_corporate';

    }

    $where=get_production_date_filter();

    $parent_acc=$GLOBALS['account_parent'];
    $return_array['select'] = " SELECT 
    cb2b_hotels.id as id,
    cb2b_hotels.id as property_id,
    cb2b_hotels.name as property_name,
    CTEInner.PropertyID ,
    IFNULL(CTEInner.room_nights_sum, 0) AS room_nights,
    IFNULL(CTEInner.missed_room_nights_sum, 0) AS missed_room_nights,
    IFNULL(CTEInner.room_revenue_usdollar_sum, 0) AS room_revenue_usdollar,
    IFNULL(CTEInner.total_revenue_usdollar_sum, 0) AS total_revenue_usdollar,
    IFNULL(CTEInner.adr_sum, 0) AS adr  FROM
    cb2b_hotels
        LEFT JOIN
    (SELECT 
        accounts.id AS AccountID,
            accounts.name,
            cb2b_production_summary_data.property_id AS PropertyID,
            SUM(cb2b_production_summary_data.room_nights) AS room_nights_sum,
            SUM(cb2b_production_summary_data.missed_room_nights) AS missed_room_nights_sum,
            SUM(cb2b_production_summary_data.room_revenue_$column_name) AS room_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.total_revenue_$column_name) AS total_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.adr$column_name2) AS adr_sum
    FROM
        accounts_cb2b_pmsprofiles_1_c
    INNER JOIN cb2b_production_summary_data ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_production_summary_data.id
        AND cb2b_production_summary_data.deleted = 0 and cb2b_production_summary_data.date_filter='ArrivalDate'
    INNER JOIN accounts ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = accounts.id
        AND accounts.deleted = 0
    WHERE
        accounts_cb2b_pmsprofiles_1_c.deleted = 0 $where
            AND accounts_cb2b_pmsprofiles_1accounts_ida = '{$parent_acc->id}'
    GROUP BY accounts.id , accounts.name , cb2b_production_summary_data.property_id) CTEInner ON CTEInner.PropertyID = cb2b_hotels.id
    WHERE cb2b_hotels.deleted = 0 
    ORDER BY IFNULL(CTEInner.total_revenue_usdollar_sum, 0) desc,property_name asc
";


    return $return_array['select'];
}
function get_accounts_cb2b_production_summary_data_by_month() {


    global $sugar_config;
    $column_name='usdollar';
    $column_name2='';
    if(empty($sugar_config['selected_pms_production_data_summary_currency'])||$sugar_config['selected_pms_production_data_summary_currency']=='usd'){
        $column_name='usdollar';
        $column_name2='';

    }
    else{
        $column_name='corporate';
        $column_name2='_corporate';

    }

    $where=get_production_date_filter();

    $parent_acc=$GLOBALS['account_parent'];

    $query="
    SELECT 
    uuid() AS id,
    concat(cb2b_production_summary_data.year,cb2b_production_summary_data.month) as property_name,
    cb2b_production_summary_data.year AS year,
    cb2b_production_summary_data.month AS month,
    SUM(cb2b_production_summary_data.room_nights) AS room_nights,
    SUM(cb2b_production_summary_data.missed_room_nights) AS missed_room_nights,
    SUM(cb2b_production_summary_data.room_revenue_$column_name) AS room_revenue_usdollar,
    SUM(cb2b_production_summary_data.total_revenue_$column_name) AS total_revenue_usdollar,
    SUM(cb2b_production_summary_data.adr$column_name2) AS adr
FROM
    accounts_cb2b_pmsprofiles_1_c
        INNER JOIN
    cb2b_production_summary_data ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_production_summary_data.id
        AND cb2b_production_summary_data.deleted = 0
        AND cb2b_production_summary_data.date_filter = 'ArrivalDate'
        INNER JOIN
    accounts ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = accounts.id
        AND accounts.deleted = 0
WHERE
    accounts_cb2b_pmsprofiles_1_c.deleted = 0 $where
        AND accounts_cb2b_pmsprofiles_1accounts_ida = '{$parent_acc->id}'
GROUP BY accounts.id , accounts.name , cb2b_production_summary_data.year , cb2b_production_summary_data.month
ORDER BY cb2b_production_summary_data.year , cb2b_production_summary_data.month
    
    
    ";

    return $query;
}
function get_production_date_filter(){

    global $sugar_config,$timedate;
    // year,month
    $whereClause='';
    $dte=$timedate->getNow(false);

    $currentYear = intval($dte->format('Y'));
    $currentMonth = intval($dte->format('m'));
    $currentQuarter = ceil($currentMonth / 3);
    switch ($sugar_config['selected_production_summary_date_range']) {
        case 'This Month':
            $whereClause = "year = $currentYear AND month = $currentMonth";
            break;
        case 'Last month':
            $lastMonth = $currentMonth == 1 ? 12 : $currentMonth - 1;
            $yearForLastMonth = $currentMonth == 1 ? $currentYear - 1 : $currentYear;
            $whereClause = "year = $yearForLastMonth AND month = $lastMonth";
            break;
        case 'This quarter':
            $startMonth = ($currentQuarter - 1) * 3 + 1;
            $endMonth = $currentQuarter * 3;
            $whereClause = "year = $currentYear AND month BETWEEN $startMonth AND $endMonth";
            break;
        case 'Last quarter':
            $lastQuarter = $currentQuarter - 1;
            $yearOffset = $currentYear - ($lastQuarter < 1 ? 1 : 0);
            $lastQuarter = $lastQuarter < 1 ? 4 : $lastQuarter;
            $startMonth = ($lastQuarter - 1) * 3 + 1;
            $endMonth = $lastQuarter * 3;
            $whereClause = "year = $yearOffset AND month BETWEEN $startMonth AND $endMonth";
            break;
        case 'YTD':
            $whereClause = "year = $currentYear AND month BETWEEN 1 AND $currentMonth";
            break;
        case 'This year':
            $whereClause = "year = $currentYear";
            break;
        case 'Last year':
            $lastYear = $currentYear - 1;
            $whereClause = "year = $lastYear";
            break;
        case 'Last 24 months':
            $previousYear = $currentYear - 1;
            $whereClause = "(year = $previousYear OR year = $currentYear) AND (month >= $currentMonth OR month < $currentMonth)";
            break;
        case 'Next month':
            $nextMonth = $currentMonth == 12 ? 1 : $currentMonth + 1;
            $yearForNextMonth = $currentMonth == 12 ? $currentYear + 1 : $currentYear;
            $whereClause = "year = $yearForNextMonth AND month = $nextMonth";
            break;
        case 'Next quarter':
            $nextQuarter = $currentQuarter == 4 ? 1 : $currentQuarter + 1;
            $yearForNextQuarter = $currentQuarter == 4 ? $currentYear + 1 : $currentYear;
            $startMonth = ($nextQuarter - 1) * 3 + 1;
            $endMonth = $nextQuarter * 3;
            $whereClause = "year = $yearForNextQuarter AND month BETWEEN $startMonth AND $endMonth";
            break;
        case 'Next Year':
            $nextYear = $currentYear + 1;
            $whereClause = "year = $nextYear";
            break;
        default:
            $whereClause = ""; // No filter or unknown filter
    }

    if(!empty($whereClause)){
        $whereClause="AND ($whereClause)";
    }
    return $whereClause;

}
/*
SELECT
    cb2b_hotels.id, CTEInner.PropertyID
FROM
    cb2b_hotels
        LEFT JOIN
    (SELECT
        accounts.id AS AccountID,
            accounts.name,
            cb2b_production_summary_data.property_id AS PropertyID,
            SUM(cb2b_production_summary_data.room_revenue_usdollar) AS room_revenue_usdollar_sum
    FROM
        accounts_cb2b_pmsprofiles_1_c
    INNER JOIN cb2b_production_summary_data ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_production_summary_data.id
        AND cb2b_production_summary_data.deleted = 0
    INNER JOIN accounts ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = accounts.id
        AND accounts.deleted = 0
    WHERE
        accounts_cb2b_pmsprofiles_1_c.deleted = 0
            AND accounts_cb2b_pmsprofiles_1accounts_ida = '74335'
    GROUP BY accounts.id , accounts.name , cb2b_production_summary_data.property_id) CTEInner ON CTEInner.PropertyID = cb2b_hotels.id; */
