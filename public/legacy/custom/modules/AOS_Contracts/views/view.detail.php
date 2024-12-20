<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 */
class AOS_ContractsViewDetail extends ViewDetail {

    public function preDisplay() {

        global $sugar_config;
        if (empty($sugar_config['enable_contract_view'])) {
            $metadataFile = $this->getMetaDataFile();
        } else {
            /* BEGIN - SECURITY GROUPS */
            $metadataFile = null;
            $foundViewDefs = false;

            $type = $this->bean->contract_type;
            if (!empty($type) && $this->module == 'AOS_Contracts') {
                //get primary group id of current user and check to see if a layout exists for that group
                $metadataFile1 = 'custom/modules/' . $this->module . '/metadata/' . $type . '/detailviewdefs.php';
                if (file_exists($metadataFile1)) {
                    $metadataFile = $metadataFile1;
                    $_REQUEST['custom_contract_type_dv'] = $type;
                }
            }

            if (isset($metadataFile)) {
                $foundViewDefs = true;
            } else {
                $metadataFile = $this->getMetaDataFile();
            }
            /* END - SECURITY GROUPS */
        }
        $this->dv = new DetailView2();
        $this->dv->ss = & $this->ss;
        $this->dv->setup($this->module, $this->bean, $metadataFile, get_custom_file_if_exists('include/DetailView/DetailView.tpl'));
    }

    public function __construct()
    {
        parent::__construct();
    }




    public function display()
    {
        $this->populateContractTemplates();
        $this->displayPopupHtml();
        parent::display();
    }

    public function populateContractTemplates()
    {
        global $app_list_strings;

        $sql = "SELECT id, name FROM aos_pdf_templates WHERE deleted = 0 AND type='AOS_Contracts' AND active = 1";

        $res = $this->bean->db->query($sql);
        $app_list_strings['template_ddown_c_list'] = array();
        while ($row = $this->bean->db->fetchByAssoc($res)) {
            $app_list_strings['template_ddown_c_list'][$row['id']] = $row['name'];
        }
    }

    public function displayPopupHtml()
    {
        global $app_list_strings,$app_strings, $mod_strings;
        $templates = array_keys($app_list_strings['template_ddown_c_list']);
        if ($templates) {
            echo '	<div id="popupDiv_ara" class="pdf-templates-modal">
				<form id="popupForm" action="index.php?entryPoint=generatePdf" method="post">
 				<table style="font-size:110%;">
					<tr height="20">
						<td colspan="2" style="padding-bottom: 0.5em;">
						<b>'.$app_strings['LBL_SELECT_TEMPLATE'].':</b>
						</td>
					</tr>';
            foreach ($templates as $template) {
                $template = str_replace('^', '', $template);
                $js = "document.getElementById('popupDivBack_ara').style.display='none';document.getElementById('popupDiv_ara').style.display='none';var form=document.getElementById('popupForm');if(form!=null){form.templateID.value='".$template."';form.submit();}else{alert('Error!');}";
                echo '<tr height="20">
				<td width="17" valign="center">
				<a href="#" onclick="'.$js.'">					
					'.SugarThemeRegistry::current()->getImage('PDF_Templates.svg').'
				</a>
				</td>
				<td style="padding-top: 0.2em;">
					<b style="margin-left: 0.2em;">
						<a href="#" onclick="'.$js.'">'.$app_list_strings['template_ddown_c_list'][$template].'</a>
					</b>
				</td>
				</tr>';
            }
            echo '		<input type="hidden" name="templateID" value="" />
				<input type="hidden" name="task" value="pdf" />
				<input type="hidden" name="module" value="'.$_REQUEST['module'].'" />
				<input type="hidden" name="uid" value="'.$this->bean->id.'" />
				</form>
				<tr style="height:10px;"><tr><tr><td colspan="2"><button style=" display: block;margin-left: auto;margin-right: auto" onclick="document.getElementById(\'popupDivBack_ara\').style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';return false;">Cancel</button></td></tr>
				</table>
				</div>
				<div id="popupDivBack_ara" onclick="this.style.display=\'none\';document.getElementById(\'popupDiv_ara\').style.display=\'none\';" style="top:0px;left:0px;position:fixed;height:100%;width:100%;background-color:#E9E9E9;opacity:0.7;display:none;vertical-align:middle;text-align:center;z-index:9998;">
				</div>
				<script>
					function showPopup(task){
						var form=document.getElementById(\'popupForm\');
						var ppd=document.getElementById(\'popupDivBack_ara\');
						var ppd2=document.getElementById(\'popupDiv_ara\');
						if('.count($templates).' == 1){
							form.task.value=task;
							form.templateID.value=\''.$template.'\';
							form.submit();
						}else if(form!=null && ppd!=null && ppd2!=null){
							ppd.style.display=\'block\';
							ppd2.style.display=\'block\';
							form.task.value=task;
						}else{
							alert(\'Error!\');
						}
					}
				</script>';
        } else {
            echo '<script>
				function showPopup(task){
				alert(\''.$mod_strings['LBL_NO_TEMPLATE'].'\');
				}
			</script>';
        }
    }

}
