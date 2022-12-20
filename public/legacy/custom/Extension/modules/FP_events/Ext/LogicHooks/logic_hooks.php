<?php
$hook_array['after_retrieve'][] = Array(
    70,
    'Fill in the hotel_relate_link and hotel_relate_link_id fields to show in DetailView',
    'custom/modules/FP_events/EventsLogicHook.php',
    'EventsLogicHook',
    'setHotelFields'
);
