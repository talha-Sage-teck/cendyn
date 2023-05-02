<?php

class OpportunityLogicHook
{
    public function processLostReason($bean, $events, $args)
    {
        if($bean->sales_stage !== "Closed_Lost") {
            $bean->lost_reason = "";
        }
    }
}
