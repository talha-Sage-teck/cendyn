<?php

$layout_defs['Opportunities']['subpanel_setup']['activities'] = array(
    'order' => 10,
    'sort_order' => 'desc',
    'sort_by' => 'date_due',
    'title_key' => 'LBL_ACTIVITIES_SUBPANEL_TITLE',
    'type' => 'collection',
    'subpanel_name' => 'activities', //this values is not associated with a physical file.
    'module' => 'Activities',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateTaskButton'),
        array('widget_class' => 'SubPanelTopScheduleMeetingButton'),
        array('widget_class' => 'SubPanelTopScheduleCallButton'),
        array('widget_class' => 'SubPanelTopComposeEmailButton'),
    ),
    'collection_list' => array(
        'meetings' => array(
            'module' => 'Meetings',
            'subpanel_name' => 'ForActivities',
            'get_subpanel_data' => 'meetings',
        ),
        'tasks' => array(
            'module' => 'Tasks',
            'subpanel_name' => 'ForActivities',
            'get_subpanel_data' => 'tasks',
        ),
        'calls' => array(
            'module' => 'Calls',
            'subpanel_name' => 'ForActivities',
            'get_subpanel_data' => 'calls',
        ),
//        'emails' => array(
//            'module' => 'Emails',
//            'subpanel_name' => 'ForUnlinkedEmailHistory',
//            'get_subpanel_data' => 'function:get_emails_by_assign_or_link',
//            'function_parameters' => array('link' => 'opportunities'),
//            'generate_select' => true,
//        ),
    )
);

$layout_defs['Opportunities']['subpanel_setup']['history'] = array(
    'order' => 20,
    'sort_order' => 'desc',
    'sort_by' => 'date_entered',
    'title_key' => 'LBL_HISTORY_SUBPANEL_TITLE',
    'type' => 'collection',
    'subpanel_name' => 'history', //this values is not associated with a physical file.
    'module' => 'History',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateNoteButton'),
        array('widget_class' => 'SubPanelTopArchiveEmailButton'),
        array('widget_class' => 'SubPanelTopSummaryButton'),
        array('widget_class' => 'SubPanelTopFilterButton'),
    ),
    'collection_list' => array(
        'meetings' => array(
            'module' => 'Meetings',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'meetings',
        ),
        'tasks' => array(
            'module' => 'Tasks',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'tasks',
        ),
        'calls' => array(
            'module' => 'Calls',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'calls',
        ),
        'notes' => array(
            'module' => 'Notes',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'notes',
        ),
        'emails' => array(
            'module' => 'Emails',
            'subpanel_name' => 'ForUnlinkedEmailHistory',
            'get_subpanel_data' => 'function:get_emails_by_assign_or_link',
            'function_parameters' => array('import_function_file' => 'include/utils.php', 'link' => 'contacts'),
            'generate_select' => true,
        ),
    ),
    'searchdefs' => array(
        'collection' =>
        array(
            'name' => 'collection',
            'label' => 'LBL_COLLECTION_TYPE',
            'type' => 'enum',
            'options' => $GLOBALS['app_list_strings']['collection_temp_list'],
            'default' => true,
            'width' => '10%',
        ),
        'name' =>
        array(
            'name' => 'name',
            'default' => true,
            'width' => '10%',
        ),
        'current_user_only' =>
        array(
            'name' => 'current_user_only',
            'label' => 'LBL_CURRENT_USER_FILTER',
            'type' => 'bool',
            'default' => true,
            'width' => '10%',
        ),
        'date_modified' =>
        array(
            'name' => 'date_modified',
            'default' => true,
            'width' => '10%',
        ),
    ),
);
