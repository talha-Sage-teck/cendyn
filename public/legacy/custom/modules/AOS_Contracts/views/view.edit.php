<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

class AOS_ContractsViewEdit extends ViewEdit {

    public function __construct() {
        parent::__construct();
    }

    public function preDisplay() {

        $metadataFile = null;
        $foundViewDefs = false;

        $type = '';
        $type = $this->bean->contract_type;

        if (!empty($_REQUEST['contract_type_cc']) && $this->module == 'AOS_Contracts') {
            //get primary group id of current user and check to see if a layout exists for that group
            $type = $_REQUEST['contract_type_cc'];
        }
        $metadataFile1 = 'custom/modules/' . $this->module . '/metadata/' . $type . '/editviewdefs.php';
        if (file_exists($metadataFile1)) {
            $_REQUEST['custom_contract_type_dv'] = $type;
            $metadataFile = $metadataFile1;
        }

        if (isset($metadataFile)) {
            $foundViewDefs = true;
        } else {
            $metadataFile = $this->getMetaDataFile();
        }
        $this->ev = $this->getEditView();
        $this->ev->ss = & $this->ss;
        $this->ev->setup($this->module, $this->bean, $metadataFile);
    }

    public function display() {
        global $app_strings, $sugar_config;

        isset($this->bean->attachment) ? $image = $this->bean->attachment : $image = '';


        $temp = str_replace($sugar_config['site_url'] . '/' . $sugar_config['upload_dir'], "", $image);
        $html = '<span id=\'new_attachment\' style=\'display:';
        if (!empty($this->bean->attachment)) {
            $html .= 'none';
        }
        $html .= '\'><input name="uploadimage" tabindex="3" type="file" size="60"/>
        	</span>
		<span id=\'old_attachment\' style=\'display:';
        if (empty($image)) {
            $html .= 'none';
        }
        $html .= '\'><input type=\'hidden\' id=\'deleteAttachment\' name=\'deleteAttachment\' value=\'0\'>
		' . $temp . '<input type=\'hidden\' name=\'old_attach\' value=\'' . $image . '\'/>
		<input type=\'button\' class=\'button\' value=\'' . $app_strings['LBL_REMOVE'] . '\' onclick=\'deleteAttachmentF();\' >
		</span>';

        $this->ss->assign('ATTACHMENT', $html);

        global $sugar_config;
        if (!empty($sugar_config['enable_contract_view'])) {
            if (!empty($_REQUEST['contract_type_cc'])) {
                $this->bean->contract_type = $_REQUEST['contract_type_cc'];
            }
        }

        parent::display();
        if (!empty($sugar_config['enable_contract_view'])) {
            $this->reload_on_change_type();
        }
    }

    function reload_on_change_type() {

        echo <<<EOHTML

<style>
#ajaxloading_c {
    top:350px!important;
    left:850px!important;
}

</style>
<script type="application/javascript" src="custom/modules/AOS_Contracts/js/reload.js"></script>


EOHTML;
    }

}
