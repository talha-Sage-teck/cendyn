<?php

//WARNING: The contents of this file are auto-generated
$beanList['SchedulersJobs'] = 'SchedulersJob';
$beanFiles['SchedulersJob'] = 'modules/SchedulersJobs/SchedulersJob.php';
$moduleList[] = 'SchedulersJobs';

if (isset($modInvisList) && is_array($modInvisList)) {
    foreach ($modInvisList as $key => $mod) {
        if ($mod === 'Schedulers_jobs') {
            unset($modInvisList[$key]);
        }
    }
}