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
require_once('include/upload_file.php');
require_once('modules/AOS_Contracts/AOS_Contracts.php');

class Override_AOS_Contracts extends AOS_Contracts {

    public function getGUID()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        }
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid, 12, 4).$hyphen
            .substr($charid, 16, 4).$hyphen
            .substr($charid, 20, 12);
        return $uuid;
    }


    public function deleteAttachment($isduplicate = "false")
    {
        $removeFile = null;

        if ($this->ACLAccess('edit')) {
            if ($isduplicate == "true") {
                return true;
            }
            $removeFile = "upload://{$this->id}";
        }

        if (file_exists($removeFile)) {
            if (!unlink($removeFile)) {
                $GLOBALS['log']->error("*** Could not unlink() file: [ {$removeFile} ]");
            } else {
                $this->uploadfile = '';
                $this->filename = '';
                $this->file_mime_type = '';
                $this->file = '';
                $this->save();

                return true;
            }
        } else {
            $this->uploadfile = '';
            $this->filename = '';
            $this->file_mime_type = '';
            $this->file = '';
            $this->save();

            return true;
        }

        return false;
    }

    public function save($check_notify = false) {
        global $sugar_config, $mod_strings;

        if (isset($_POST['deleteAttachment']) && $_POST['deleteAttachment'] == '1') {
            $this->attachment = '';
        }

        require_once('include/upload_file.php');
        $GLOBALS['log']->debug('UPLOADING CONTRACTS FILE');

        if(!empty($_FILES['uploadimage']['name'])) {
            $imageFileName = $_FILES['uploadimage']['name'] ?? '';
//            if (!has_valid_image_extension('AOS_Contracts Uploaded image file: ' . $imageFileName, $imageFileName)) {
//                LoggerManager::getLogger()->fatal("AOS_Contracts save - Invalid image file ext : '$imageFileName'.");
//                throw new RuntimeException('Invalid request');
//            }
        }

        if (!empty($_FILES['uploadimage']['tmp_name']) ) {
            if ($_FILES['uploadimage']['size'] > $sugar_config['upload_maxsize']) {
                die($mod_strings['LBL_IMAGE_UPLOAD_FAIL'] . $sugar_config['upload_maxsize']);
            }
            $prefix_image = $this->getGUID() . '_';
            $this->attachment = $sugar_config['site_url'] . '/' . $sugar_config['upload_dir'] . $prefix_image . $_FILES['uploadimage']['name'];
            move_uploaded_file($_FILES['uploadimage']['tmp_name'], $sugar_config['upload_dir'] . $prefix_image . $_FILES['uploadimage']['name']);
        }

        return parent::save($check_notify);
    }
}
