<?php
function qrandr() {
    $autoexecute = true; //execute the SQL
    echo "Running Quick Repair...<br>";
    $show_output = false; //output to the screen
    require_once("modules/Administration/QuickRepairAndRebuild.php");
    $randc = new RepairAndClear();
    $randc->repairAndClearAll(array('clearAll'),array(translate('LBL_ALL_MODULES')), $autoexecute,$show_output);
    echo "Done.<br>";
}
