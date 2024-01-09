<?php

$layout_defs['Accounts']['subpanel_setup']['history'] = array(
    'order' => 20,
    'sort_order' => 'desc',
    'sort_by' => 'date_entered',
    'title_key' => 'LBL_HISTORY_SUBPANEL_TITLE',
    'type' => 'collection',
    'subpanel_name' => 'history', //this values is not associated with a physical file.
    'header_definition_from_subpanel' => 'meetings',
    'module' => 'History',
    'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateNoteButton'),
        array('widget_class' => 'SubPanelTopArchiveEmailButton'),
        array('widget_class' => 'SubPanelTopSummaryButton'),
        array('widget_class' => 'SubPanelTopFilterButton'),
    ),
    'collection_list' => array(
        'tasks' => array(
            'module' => 'Tasks',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'tasks',
        ),
        'meetings' => array(
            'module' => 'Meetings',
            'subpanel_name' => 'ForHistory',
            'get_subpanel_data' => 'meetings',
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
            'get_distinct_data' => true,
        ),
    ),
);
