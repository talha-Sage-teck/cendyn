<?php
$dictionary['Task']['fields']['date_end'] = array(
    'name' => 'date_end',
    'vname' => 'LBL_DATE_END',
    'type' => 'datetime',
    'dbType' => 'datetime', // Set to 'date' to ensure it is treated as a date even though it's not in the database.
    'comment' => 'The end date of the task',
    'importable' => 'false',
    'studio' => 'false',
    'source' => 'non-db',
);