<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getHotelShortNameList() {
    $db = DBManagerFactory::getInstance();
    if ($db === null) {
        $db = DBManagerFactory::getInstance();
    }

    $hotelsList = array();
    $query = "SELECT distinct hotel_short_name FROM cb2b_pmsprofiles WHERE deleted = 0 order by hotel_short_name asc";
    $result = $db->query($query);
    while ($arr = $db->fetchByAssoc($result)) {
        $hotelsList[trim($arr['hotel_short_name'])] = trim($arr['hotel_short_name']);
    }

    return $hotelsList;
}
