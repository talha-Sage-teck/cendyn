<?php

class OpportunityLogicHook
{
    public function processLostReason($bean, $events, $args)
    {
        if($bean->sales_stage !== "Closed Lost") {
            $bean->lost_reason = "";
        }
    }
}
