<?php

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/DashletGeneric.php');
require_once('modules/CB2B_PMSProfiles/CB2B_PMSProfiles.php');

class CB2B_PMSProfilesDashlet extends DashletGeneric {

    public $myItemsOnly = false;

    function __construct($id, $def = null) {
        global $current_user, $app_strings;
        require('modules/CB2B_PMSProfiles/metadata/dashletviewdefs.php');

        parent::__construct($id, $def);

        if (empty($def['title'])) {
            $this->title = translate('LBL_HOMEPAGE_TITLE', 'CB2B_PMSProfiles');
        }

        $this->searchFields = $dashletData['CB2B_PMSProfilesDashlet']['searchFields'];
        $this->columns = $dashletData['CB2B_PMSProfilesDashlet']['columns'];

        $this->seedBean = new CB2B_PMSProfiles();
    }

    public function process($lvsParams = array(), $id = null) {
        if (isset($this->filters['hotel_short_name_enum'])) {
            $this->filters['hotel_short_name'] = $this->filters['hotel_short_name_enum'];
            unset($this->filters['hotel_short_name_enum']);
        }

        if (isset($this->filters['is_assigned_account'])) {
            if ($this->filters['is_assigned_account'] == 1 || $this->filters['is_assigned_account'] == 'on') {
                $lvsParams['custom_where'] = ' AND (cb2b_pmsprofiles.id IN (SELECT 
                        cb2b_pmsprofiles.id
                    FROM
                        cb2b_pmsprofiles
                            LEFT JOIN
                        accounts_cb2b_pmsprofiles_1_c ON cb2b_pmsprofiles.id = accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb
                            AND accounts_cb2b_pmsprofiles_1_c.deleted = 0
                    WHERE
                        (1 = 0
                            AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NULL)
                            OR (1 = 1
                            AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NOT NULL))) ';
            } else if ($this->filters['is_assigned_account'] == 0 || $this->filters['is_assigned_account'] == 'off') {
                $lvsParams['custom_where'] = ' AND (cb2b_pmsprofiles.id IN (SELECT 
                        cb2b_pmsprofiles.id
                    FROM
                        cb2b_pmsprofiles
                            LEFT JOIN
                        accounts_cb2b_pmsprofiles_1_c ON cb2b_pmsprofiles.id = accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb
                            AND accounts_cb2b_pmsprofiles_1_c.deleted = 0
                    WHERE
                        (0 = 0
                            AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NULL)
                            OR (0 = 1
                            AND accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb IS NOT NULL))) ';
            }
            unset($this->filters['is_assigned_account']);
        }

        $lvsParams['overrideOrder'] = true;
        $lvsParams['orderBy'] = 'date_entered';
        $lvsParams['sortOrder'] = 'DESC';

//        $GLOBALS['log']->fatal('$lvsParams : ' . print_r($lvsParams, 1));
//        $GLOBALS['log']->fatal('$this->filters : ' . print_r($this->filters, 1));

        parent::process($lvsParams);
    }

}
