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


 require_once 'modules/AOS_PDF_Templates/views/view.detail.php';


 class CustomAOS_PDF_TemplatesViewDetail extends AOS_PDF_TemplatesViewDetail
{

    public function addFonts(){

        require_once("include/SugarTinyMCE.php");
        global $locale;
        global $sugar_config;
        $url=$sugar_config['site_url'];
        echo $url;
        $tiny = new SugarTinyMCE();
        $tinyMCE = $tiny->getConfig();
        $css=<<<CSS

        <style>
        @font-face {
            font-family: 'Inter Semi Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Pitch Sans';
            src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot');
            src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Thin';
            src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Thin.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Thin.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Medium';
            src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Medium.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Medium.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Light';
            src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Light';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.woff2') format('woff2'),
                url('Inter-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Core';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Black';
            src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Black.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Black.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Extra Light';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Medium';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans W Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.woff2') format('woff2'),
                url('ColumbiaSansW-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Extra Bold';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Light';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans W Extra Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans Extra Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
        font-family: 'Inter Medium Italic';
        src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot');
        src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot?#iefix') format('embedded-opentype'),
            url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff2') format('woff2'),
            url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff') format('woff');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }

        @font-face {
            font-family: 'Inter Light Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Italic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Italic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Bold Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Light Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Bold Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Bold';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Black Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Bold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Bold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        </style>

CSS;


        echo $css;
    }
    
    public function display(){
        

        parent::display();
        $this->addFonts();


    }
}