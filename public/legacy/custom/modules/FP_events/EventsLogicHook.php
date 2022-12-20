<?php

/* * *
 * Class file which contains the FP_events module logichook functions.
 */

class EventsLogicHook {
    public function setHotelFields($bean, $events, $args) {
        /***
         * Set hotel_relate_link and hotel_relate_link_id fields from the related FP_Event_Location's record
         * @Objectives:
         * 1. Set hotel_relate_link
         * 2. Set hotel_relate_link_id
         */

        $location = BeanFactory::getBean('FP_Event_Locations', $bean->fp_event_locations_fp_events_1fp_event_locations_ida);
        $bean->hotel_relate_link = $location->hotel_name;
        $bean->hotel_relate_link_id = $location->hotel_id;
    }
}
