<?php

function get_accounts_cb2b_production_summary_data_by_property() {
//    global $db;
//    $bean = $GLOBALS['app']->controller->bean;
//    $return_array = array();
    $args = func_get_args();
//    $LeadsId = $args[0]['id'];

    $GLOBALS['log']->fatal('$args : ' . print_r($args, 1));
    
//    $return_array['select'] = " select cb2b_production_summary_data.* ";
//    $return_array['from'] = " FROM cb2b_production_summary_data ";
//    $return_array['join'] = " ";
//    $return_array['where'] = " WHERE cb2b_production_summary_data.name is not NULL and cb2b_production_summary_data.name != '' ";
    
    $return_array['select'] = " SELECT 
    cb2b_hotels.id,
    CTEInner.PropertyID,
    IFNULL(CTEInner.room_nights_sum, 0) AS room_nights,
    IFNULL(CTEInner.missed_room_nights_sum, 0) AS missed_room_nights,
    IFNULL(CTEInner.room_revenue_usdollar_sum, 0) AS room_revenue_usdollar,
    IFNULL(CTEInner.total_revenue_usdollar_sum, 0) AS total_revenue_usdollar,
    IFNULL(CTEInner.adr_sum, 0) AS adr ";
    $return_array['from'] = " FROM
    cb2b_hotels
        LEFT JOIN
    (SELECT 
        accounts.id AS AccountID,
            accounts.name,
            cb2b_production_summary_data.property_id AS PropertyID,
            SUM(cb2b_production_summary_data.room_nights) AS room_nights_sum,
            SUM(cb2b_production_summary_data.missed_room_nights) AS missed_room_nights_sum,
            SUM(cb2b_production_summary_data.room_revenue_usdollar) AS room_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.total_revenue_usdollar) AS total_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.adr) AS adr_sum
    FROM
        accounts_cb2b_pmsprofiles_1_c
    INNER JOIN cb2b_production_summary_data ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_production_summary_data.id
        AND cb2b_production_summary_data.deleted = 0
    INNER JOIN accounts ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = accounts.id
        AND accounts.deleted = 0
    WHERE
        accounts_cb2b_pmsprofiles_1_c.deleted = 0
            AND accounts_cb2b_pmsprofiles_1accounts_ida = '74335'
    GROUP BY accounts.id , accounts.name , cb2b_production_summary_data.property_id) CTEInner ON CTEInner.PropertyID = cb2b_hotels.id ";
    $return_array['join'] = " ";
    $return_array['where'] = " ";

//    $return_array['join_tables'] = '';

    return $return_array;
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