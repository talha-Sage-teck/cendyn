<?php
/**
 * SuiteCRM is a customer relationship management program developed by SalesAgility Ltd.
 * Copyright (C) 2021 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SALESAGILITY, SALESAGILITY DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */


namespace App\Module\cb2b_production_summary_data\Statistics\Subpanels;

use App\Statistics\Entity\Statistic;
use App\Data\LegacyHandler\PresetDataHandlers\SubpanelDataQueryHandler;
use App\Statistics\Service\StatisticsProviderInterface;
use App\Statistics\StatisticsHandlingTrait;
use DBManagerFactory;

class SubPanelcb2b_production_summary_dataTotal extends SubpanelDataQueryHandler implements StatisticsProviderInterface
{
    use StatisticsHandlingTrait;

    public const KEY = 'cb2b_production_summary_data';

    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return self::KEY;
    }

    /**
     * @inheritDoc
     */
    public function getData(array $query): Statistic
    {
        [$module, $id] = $this->extractContext($query);
        $subpanel = $query['key'] ?? '';

        $subpanelName = $query['params']['subpanel'] ?? '';
        if (!empty($subpanelName)) {
            $subpanel = $subpanelName;
        }

        if (empty($module) || empty($id) || empty($subpanel)) {
            return $this->getEmptyResponse(self::KEY);
        }


        $this->init();
        $this->startLegacyApp();


        global $sugar_config;
        $column_name='usdollar';
        $column_name2='';
        $cur_sign='$';
        if(empty($sugar_config['selected_pms_production_data_summary_currency'])||$sugar_config['selected_pms_production_data_summary_currency']=='USD'){
            $column_name='usdollar';
            $column_name2='';
            $cur_sign='$';

        }
        else{
            $column_name='corporate';
            $column_name2='_corporate';
            $cur_sign='€';

        }


        $dateNow = date("Y-m-d");
        global $app_strings;

        $db = DBManagerFactory::getInstance();
        $relateId = $db->quote($id);

        $where=$this->getDateFilter();
//        $queries = $this->getQueries($module, $id, $subpanel);
//        $parts = $queries[0];
//        $parts['select'] = 'SELECT q.`expiration`';
//        $parts['from'] = ' FROM aos_quotes as q ';
//        $parts['where'] = " WHERE q.`expiration` >= '$dateNow' AND q.deleted = 0  AND (q.billing_account_id = '$relateId' OR q.billing_contact_id = '$relateId') ";
//        $parts['order_by'] = ' ORDER BY q.expiration ASC LIMIT 1 ';
        $innerQuery = "
         SELECT sum(tt.total_revenue_usdollar) as total FROM (SELECT 
    cb2b_hotels.id as id,
    cb2b_hotels.id as property_id,
    cb2b_hotels.name as property_name,
    CTEInner.PropertyID ,
    IFNULL(CTEInner.room_nights_sum, 0) AS room_nights,
    IFNULL(CTEInner.missed_room_nights_sum, 0) AS missed_room_nights,
    IFNULL(CTEInner.room_revenue_usdollar_sum, 0) AS room_revenue_usdollar,
    IFNULL(CTEInner.total_revenue_usdollar_sum, 0) AS total_revenue_usdollar,
    IFNULL(CTEInner.adr_sum, 0) AS adr  FROM
    cb2b_hotels
        LEFT JOIN
    (SELECT 
        accounts.id AS AccountID,
            accounts.name,
            cb2b_production_summary_data.property_id AS PropertyID,
            SUM(cb2b_production_summary_data.room_nights) AS room_nights_sum,
            SUM(cb2b_production_summary_data.missed_room_nights) AS missed_room_nights_sum,
            SUM(cb2b_production_summary_data.room_revenue_$column_name) AS room_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.total_revenue_$column_name) AS total_revenue_usdollar_sum,
            SUM(cb2b_production_summary_data.adr$column_name2) AS adr_sum
    FROM
        accounts_cb2b_pmsprofiles_1_c
    INNER JOIN cb2b_production_summary_data ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1cb2b_pmsprofiles_idb = cb2b_production_summary_data.id
        AND cb2b_production_summary_data.deleted = 0 and cb2b_production_summary_data.date_filter='ArrivalDate'
    INNER JOIN accounts ON accounts_cb2b_pmsprofiles_1_c.accounts_cb2b_pmsprofiles_1accounts_ida = accounts.id
        AND accounts.deleted = 0
    WHERE
        accounts_cb2b_pmsprofiles_1_c.deleted = 0 $where
            AND accounts_cb2b_pmsprofiles_1accounts_ida = '$id'
    GROUP BY accounts.id , accounts.name , cb2b_production_summary_data.property_id) CTEInner ON CTEInner.PropertyID = cb2b_hotels.id) as tt";
        $result = $this->fetchRow($innerQuery);

        if (empty($result)) {
            $this->close();

            $date = $cur_sign.'0';
            $statistic = $this->buildSingleValueResponse(self::KEY, 'varchar', ['value' => $date]);
            $this->addMetadata($statistic, ['tooltip_title_key' => 'LBL_CB2B_PRODUCTION_SUMMARY_TOOLTIP']);
            $this->addMetadata($statistic, ['descriptionKey' => 'LBL_CB2B_PRODUCTION_SUMMARY_TOOLTIP']);

            return $statistic;
        }

        $total=intval($result['total']);
        $date = $cur_sign.$total;
        $statistic = $this->buildSingleValueResponse(self::KEY, 'varchar', ['value' => $date]);
        $this->addMetadata($statistic, ['tooltip_title_key' => 'LBL_CB2B_PRODUCTION_SUMMARY_TOOLTIP']);
        $this->addMetadata($statistic, ['descriptionKey' => 'LBL_CB2B_PRODUCTION_SUMMARY_TOOLTIP']);

        return $statistic;
    }

    function getDateFilter(){

        global $sugar_config,$timedate;
        // year,month
        $whereClause='';
        $dte=$timedate->getNow(false);

        $currentYear = intval($dte->format('Y'));
        $currentMonth = intval($dte->format('m'));
        $currentQuarter = ceil($currentMonth / 3);
        switch ($sugar_config['selected_production_summary_date_range']) {
            case 'This Month':
                $whereClause = "year = $currentYear AND month = $currentMonth";
                break;
            case 'This quarter':
                $startMonth = ($currentQuarter - 1) * 3 + 1;
                $endMonth = $currentQuarter * 3;
                $whereClause = "year = $currentYear AND month BETWEEN $startMonth AND $endMonth";
                break;
            case 'Last quarter':
                $lastQuarter = $currentQuarter - 1;
                $yearOffset = $currentYear - ($lastQuarter < 1 ? 1 : 0);
                $lastQuarter = $lastQuarter < 1 ? 4 : $lastQuarter;
                $startMonth = ($lastQuarter - 1) * 3 + 1;
                $endMonth = $lastQuarter * 3;
                $whereClause = "year = $yearOffset AND month BETWEEN $startMonth AND $endMonth";
                break;
            case 'YTD':
                $whereClause = "year = $currentYear AND month BETWEEN 1 AND $currentMonth";
                break;
            case 'This year':
                $whereClause = "year = $currentYear";
                break;
            case 'Last year':
                $lastYear = $currentYear - 1;
                $whereClause = "year = $lastYear";
                break;
            case 'Last 24 months':
                $previousYear = $currentYear - 1;
                $whereClause = "(year = $previousYear OR year = $currentYear) AND (month >= $currentMonth OR month < $currentMonth)";
                break;
            case 'Next month':
                $nextMonth = $currentMonth == 12 ? 1 : $currentMonth + 1;
                $yearForNextMonth = $currentMonth == 12 ? $currentYear + 1 : $currentYear;
                $whereClause = "year = $yearForNextMonth AND month = $nextMonth";
                break;
            case 'Next quarter':
                $nextQuarter = $currentQuarter == 4 ? 1 : $currentQuarter + 1;
                $yearForNextQuarter = $currentQuarter == 4 ? $currentYear + 1 : $currentYear;
                $startMonth = ($nextQuarter - 1) * 3 + 1;
                $endMonth = $nextQuarter * 3;
                $whereClause = "year = $yearForNextQuarter AND month BETWEEN $startMonth AND $endMonth";
                break;
            case 'Next Year':
                $nextYear = $currentYear + 1;
                $whereClause = "year = $nextYear";
                break;
            default:
                $whereClause = ""; // No filter or unknown filter
        }

        if(!empty($whereClause)){
            $whereClause="AND ($whereClause)";
        }
        return $whereClause;

    }

}
