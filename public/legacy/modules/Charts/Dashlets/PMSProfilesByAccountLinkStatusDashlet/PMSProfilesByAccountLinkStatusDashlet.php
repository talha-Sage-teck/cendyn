<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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
require_once('include/Dashlets/DashletGenericChart.php');

class PMSProfilesByAccountLinkStatusDashlet extends DashletGenericChart {

    public $pmsbals_account_link_status = array();
    public $pmsbals_ids = array();
    public $pmsbals_date_entered_start;
    public $pmsbals_date_entered_end;

    /**
     * @see DashletGenericChart::$_seedName
     */
    protected $_seedName = 'CB2B_PMSProfiles';

    /**
     * @see DashletGenericChart::__construct()
     */
    public function __construct(
    $id, array $options = null
    ) {
        global $timedate;

        if (empty($options['pmsbals_date_entered_start'])) {
//            $options['pmsbals_date_entered_start'] = $timedate->nowDbDate();
        }

        if (empty($options['pmsbals_date_entered_end'])) {
//            $options['pmsbals_date_entered_end'] = $timedate->asDbDate($timedate->getNow()->modify("+6 months"));
        }

        parent::__construct($id, $options);
    }

    /**
     * @see DashletGenericChart::displayOptions()
     */
    public function displayOptions() {
        global $app_list_strings;

        $selected_datax = array();
        if (!empty($this->pmsbals_account_link_status) && count($this->pmsbals_account_link_status) > 0) {
            foreach ($this->pmsbals_account_link_status as $key) {
                $selected_datax[] = $key;
            }
        } else {
            $selected_datax = array_keys($app_list_strings['pms_profile_auto_or_maunal_linking']);
        }

        $this->_searchFields['pmsbals_account_link_status']['options'] = array_filter($app_list_strings['pms_profile_auto_or_maunal_linking']);
        $this->_searchFields['pmsbals_account_link_status']['input_name0'] = $selected_datax;

        if (!isset($this->pmsbals_ids) || count($this->pmsbals_ids) == 0) {
            $this->_searchFields['pmsbals_ids']['input_name0'] = array_keys(get_user_array(false));
        }

//        $GLOBALS['log']->fatal('$this->_searchFields : ' . print_r($this->_searchFields, 1));
//        $GLOBALS['log']->fatal('$lvsParams : ' . print_r($lvsParams, 1));
//        $GLOBALS['log']->fatal('$this->filters : ' . print_r($this->filters, 1));
        return parent::displayOptions();
    }

    /**
     * @see DashletGenericChart::display()
     */
    public function display() {
        global $current_user, $sugar_config;

        $data = $this->getChartData($this->constructQuery());
        $chartReadyData = $this->prepareChartData($data);

//        $GLOBALS['log']->fatal('$chartReadyData : ' . print_r($chartReadyData, 1));

        $canvasId = 'rGraphLeadSources' . uniqid();
        $chartWidth = 900;
        $chartHeight = 500;

        $jsonData = json_encode($chartReadyData['data']);
        $jsonKeys = json_encode($chartReadyData['keys']);
        $jsonLabels = json_encode($chartReadyData['labels']);
        $jsonLabelsAndValues = json_encode($chartReadyData['labelsAndValues']);

        $autoRefresh = $this->processAutoRefresh();

        $module = 'CB2B_PMSProfiles';
        $action = 'index';
        $query = 'true';
        $searchFormTab = 'advanced_search';

        $colours = "['#a6cee3','#1f78b4','#b2df8a','#33a02c','#fb9a99','#e31a1c','#fdbf6f','#ff7f00','#cab2d6','#6a3d9a','#ffff99','#b15928','#8080ff','#c03f80']";

        if (!is_array($chartReadyData['data']) || count($chartReadyData['data']) < 1) {
            return "<h3 class='noGraphDataPoints'>$this->noDataMessage</h3>";
        }

        //<canvas id='$canvasId' width='$chartWidth' height='$chartHeight' class='resizableCanvas' style='width: 100%;'>[No canvas support]</canvas>
        //<canvas id='$canvasId' width=canvas.width height=canvas.width class='resizableCanvas'>[No canvas support]</canvas>
        $chart = <<<EOD

<canvas id='$canvasId' width='$chartWidth' height='$chartHeight'  class='resizableCanvas' >[No canvas support]</canvas>

        <input type='hidden' class='module' value='$module' />
        <input type='hidden' class='action' value='$action' />
        <input type='hidden' class='query' value='$query' />
        <input type='hidden' class='searchFormTab' value='$searchFormTab' />
        $autoRefresh
        <script>
           window["chartHBarKeys$canvasId"] = $jsonKeys;
           var pie = new RGraph.Pie({
                id: '$canvasId',
                data: $jsonData,
                options: {
                strokestyle: '#e8e8e8',
                linewidth: 2,
                eventsMousemove:rgraphMouseMove,
                eventsClick:PMSProfilesByAccountLinkStatusDashletClick,
                shadowBlur: 5,
                tooltips:$jsonLabels,
                tooltipsEvent:'mousemove',
                shadowOffsetx: 5,
                shadowOffsety: 5,
                shadowColor: '#aaa',
                centerx:true,
                key: $jsonLabelsAndValues,
                labels:$jsonLabels,
                keyPosition:'graph',
                keyPositionX:0,
                keyBackground:'rgba(255,255,255,0.7)',
                colors:$colours,
                textSize:10,
                tooltipsCssClass: 'rgraph_chart_tooltips_css',
                keyColors:$colours
                //keyInteractive: true
                }
            }).draw();

            pie.set({
    contextmenu: [
        ['Get PNG', RGraph.showPNG],
        null,
        ['Cancel', function () {}]
    ]
});
        </script>
EOD;

        return $chart;
    }

    public function getChartData($query) {
        global $app_list_strings;
        $db = DBManagerFactory::getInstance();
        $dataSet = [];
        $result = $db->query($query);

        $row = $db->fetchByAssoc($result);

        while ($row != null) {
            if (isset($row['is_auto_linking']) && $app_list_strings['pms_profile_auto_or_maunal_linking'][$row['is_auto_linking']]) {
                $row['is_auto_linking_key'] = $row['is_auto_linking'];
                $row['is_auto_linking'] = $app_list_strings['pms_profile_auto_or_maunal_linking'][$row['is_auto_linking']];
            }
            $dataSet[] = $row;
            $row = $db->fetchByAssoc($result);
        }
        return $dataSet;
    }

    protected function prepareChartData($data) {
        //return $data;
        $chart['labels'] = [];
        $chart['data'] = [];
        $chart['keys'] = [];
        $total = 0;
        $numberOfPMSProfiles = $this->getNumberOfPMSProfiles();
        foreach ($data as $i) {
            $percentage = ($i['pmsprofile_count'] / $numberOfPMSProfiles) * 100;
            $percentage = format_number($percentage, null, 2);
            $chart['labelsAndValues'][] = $i['is_auto_linking'] . ' (' . (int) $i['pmsprofile_count'] . ' | ' . $percentage . '%)';
            $chart['labels'][] = $i['is_auto_linking'];
            $chart['keys'][] = $i['is_auto_linking_key'];
            $chart['data'][] = (int) $i['pmsprofile_count'];
            $total += (int) $i['pmsprofile_count'];
        }
        $chart['total'] = $total;
        return $chart;
    }

    public function getNumberOfPMSProfiles() {
        $db = DBManagerFactory::getInstance();
        $query = "SELECT count(id) as noOfPMSProfiles FROM cb2b_pmsprofiles WHERE deleted = 0;";
        $result = $db->query($query);
        $row = $db->fetchByAssoc($result);

        return $row['noOfPMSProfiles'];
    }

    /**
     * @see DashletGenericChart::constructQuery()
     */
    protected function constructQuery() {
        $subquery1 = '';
        if (count($this->pmsbals_ids) > 0) {
            $subquery1 .= "AND cb2b_pmsprofiles.assigned_user_id IN ('" . implode("','", $this->pmsbals_ids) . "') ";
        }

        $subquery2 = '';
        if (!empty($this->pmsbals_date_entered_start)) {
            $subquery2 = " AND cb2b_pmsprofiles.date_entered >= " . DBManagerFactory::getInstance()->convert("'" . $this->pmsbals_date_entered_start . "'", 'date') . " ";
        }
        $subquery3 = '';
        if (!empty($this->pmsbals_date_entered_end)) {
            $subquery3 = " AND cb2b_pmsprofiles.date_entered <= " . DBManagerFactory::getInstance()->convert("'" . $this->pmsbals_date_entered_end . "'", 'date') . " ";
        }

        $query = "SELECT 
    is_auto_linking_grp AS is_auto_linking, pmsprofile_count
FROM
    (SELECT 
        is_auto_linking,
            pmsprofile_count,
            CASE
                WHEN is_auto_linking = 0 THEN 'Manually Linked'
                WHEN is_auto_linking = 1 THEN 'Auto Linked'
                ELSE 'Not Linked'
            END AS is_auto_linking_grp
    FROM
        (SELECT 
        accounts_cb2b_pmsprofiles_1_c.is_auto_linking,
            COUNT(*) AS pmsprofile_count
    FROM
        cb2b_pmsprofiles
    LEFT JOIN accounts_cb2b_pmsprofiles_1_c ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_pmsprofiles.id
        AND accounts_cb2b_pmsprofiles_1_c.deleted = 0
    WHERE
        cb2b_pmsprofiles.deleted = 0 {$subquery1} {$subquery2} {$subquery3} 
    GROUP BY is_auto_linking) grpTable) capsuleTable
WHERE ";
//    capsuleTable.is_auto_linking_grp IN ('Manually Linked' , 'Not Linked', 'Auto Linked');";

        if (count($this->pmsbals_account_link_status) > 0) {
            $query .= "capsuleTable.is_auto_linking_grp IN ('" . implode("','", $this->pmsbals_account_link_status) . "') ";
        } else {
            $query .= "capsuleTable.is_auto_linking_grp IN ('" . implode("','", array_keys($GLOBALS['app_list_strings']['pms_profile_auto_or_maunal_linking'])) . "') ";
        }
            $query .= " ORDER BY is_auto_linking ASC ";

        $GLOBALS['log']->fatal('$query : ' . print_r($query, 1));

        return $query;
    }

}
