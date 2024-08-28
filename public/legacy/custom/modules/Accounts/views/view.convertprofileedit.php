<?php

class AccountsViewConvertProfileEdit extends ViewEdit {
    public function preDisplay() {
        global $current_user;
        $metadataFile = "custom/modules/Accounts/metadata/convertprofileeditviewdefs.php";
        $this->ev = new EditView();
        $this->ev->ss = &$this->ss;
        $this->ev->view = "convertprofileedit";
        $focus = $this->bean;
        if($_REQUEST['return_id'] && trim($_REQUEST['return_id']) !== '') {
            $profileBean = BeanFactory::getBean('CB2B_PMSProfiles', $_REQUEST['return_id']);
            $focus->name = $profileBean->name;
            $focus->account_base_type = $profileBean->type;
            $focus->billing_address_street = $profileBean->pms_address_street;
            $focus->billing_address_city = $profileBean->pms_address_city;
            $focus->billing_address_state = $profileBean->pms_address_state;
            $focus->billing_address_postalcode = $profileBean->pms_address_postalcode;
            $focus->billing_address_country = $profileBean->pms_address_country;
            $focus->iata = $profileBean->iata;
            $focus->website = $profileBean->website;
            $focus->phone_office = $profileBean->phone;
            $focus->email1 = $profileBean->email1;
            $focus->assigned_user_id = $current_user->id;
//            $focus->interests_c = $profileBean->interests;
//            $focus->parent_name = $profileBean->member;
//            $focus->parent_id = $profileBean->member_id;
//            $focus->last_parent_id = $profileBean->member_id;
        }
        $this->ev->setup($this->module, $focus, $metadataFile, 'include/EditView/EditView.tpl', true,
            'convertprofileeditviewdefs');
    }
}
