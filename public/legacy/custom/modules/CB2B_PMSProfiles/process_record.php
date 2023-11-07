<?php

if (!defined('sugarEntry') || !sugarEntry)
    die('Not A Valid Entry Point');

class processRecordHandler {

    /**
     * 
     * @param type $bean
     * @param type $event
     * @param type $arguments
     */
    function processRecord(&$bean, $event, $arguments) {
        //If relationship is loaded
        if ($bean->load_relationship('cb2b_pmsprofiles_cb2b_hotels_1')) {
            //Fetch related beans
            $relatedBeans = $bean->cb2b_pmsprofiles_cb2b_hotels_1->getBeans(array(
                'limit' => 1,
            ));
            if (count($relatedBeans) > 0) {
                foreach ($relatedBeans as $rel) {
                    // Display hotel short name of first related hotel in the HOTEL column on the list view
                    $bean->first_related_hotel_short_name = $rel->shortname;
                    break;
                }
            }
        }
    }

}
