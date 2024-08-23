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


 require_once 'modules/AOS_PDF_Templates/views/view.edit.php';


 class CustomAOS_PDF_TemplatesViewEdit extends AOS_PDF_TemplatesViewEdit
{
    public function displayTMCE()
    {
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


        $js =<<<JS
        

		<script language="javascript" type="text/javascript">
		$tinyMCE
		var df = '{$locale->getPrecedentPreference('default_date_format')}';
        
		tinyMCE.init({
            
    		theme : "advanced",
            content_style:"@font-face {" + 
    "font-family: 'Inter Semi Bold';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Pitch Sans';" +
    "src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Thin';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Thin.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Thin.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Medium';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Medium.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Medium.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Extra Bold';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Light';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Light.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Light.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Extra Light';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.woff2') format('woff2')," +
        "url('Inter-ExtraLight.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Core';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Black';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Black.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Black.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Extra Light';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Medium';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Columbia Sans W Light';" +
    "src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.woff2') format('woff2')," +
        "url('ColumbiaSansW-Light.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+
    "@font-face {" + 
"font-family: 'FS Emeric Extra Bold';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric Light';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans W Extra Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans Extra Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Medium Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Light Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-Italic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-Italic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Bold Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Extra Light Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+
"@font-face {" + 
"font-family: 'Inter Extra Bold Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric Bold';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Black Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Bold';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-Bold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-Bold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}",
    		theme_advanced_toolbar_align : "left",
    		mode: "exact",
			elements : "description",
			theme_advanced_toolbar_location : "top",
			theme_advanced_buttons1: "code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator,styleprops,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,indent,separator,ltr,rtl,separator,undo,redo,separator, link,unlink,anchor,image,separator,sub,sup,separator,charmap,visualaid",
			theme_advanced_buttons3: "tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,pagebreak",
			theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Columbia Sans Extra Light=Columbia Sans Extra Light;Columbia Sans Light=Columbia Sans Light;Columbia Sans W Extra Light=Columbia Sans W Extra Light;Columbia Sans W Light=Columbia Sans W Light;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;FS Emeric Bold=FS Emeric Bold;FS Emeric Core=FS Emeric Core;FS Emeric Extra Bold=FS Emeric Extra Bold;FS Emeric Extra Light=FS Emeric Extra Light;FS Emeric Light=FS Emeric Light;FS Emeric Medium=FS Emeric Medium;FS Emeric Regular=FS Emeric;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helveticaneue,sans-serif;Impact=impact,chicago;Inter Black=Inter Black;Inter Black Italic=Inter Black Italic;Inter Bold=Inter Bold;Inter Bold Italic=Inter Bold Italic;Inter Extra Bold=Inter Extra Bold;Inter Extra Bold Italic=Inter Extra Bold Italic;Inter Extra Light=Inter Extra Light;Inter Extra Light Italic=Inter Extra Light Italic;Inter Italic=Inter Italic;Inter Light=Inter Light;Inter Light Italic=Inter Light Italic;Inter Medium=Inter Medium;Inter Medium Italic=Inter Medium Italic;Inter Semi Bold=Inter Semi Bold;Inter Thin=Inter Thin;Pitch Sans Regular=Pitch Sans;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
			plugins : "advhr,insertdatetime,table,paste,searchreplace,directionality,style,pagebreak",
			height:"500",
			width: "100%",
			inline_styles : true,
			directionality : "ltr",
			remove_redundant_brs : true,
			entity_encoding: 'raw',
			cleanup_on_startup : true,
			strict_loading_mode : true,
			convert_urls : false,
			plugin_insertdate_dateFormat : '{DATE '+df+'}',
			pagebreak_separator : "<div style=\"page-break-before: always;\">&nbsp;</div>",
			extended_valid_elements : "textblock,barcode[*]",
			custom_elements: "textblock",
		});

		tinyMCE.init({
            
    		theme : "advanced",
            content_style:"@font-face {" + 
    "font-family: 'Inter Semi Bold';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Pitch Sans';" +
    "src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Thin';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Thin.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Thin.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Medium';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Medium.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Medium.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Extra Bold';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Light';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Light.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Light.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Extra Light';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.woff2') format('woff2')," +
        "url('Inter-ExtraLight.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Core';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Inter Black';" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Black.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/Inter-Black.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Extra Light';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'FS Emeric Medium';" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff2') format('woff2')," +
        "url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+

"@font-face {" + 
    "font-family: 'Columbia Sans W Light';" +
    "src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot');" +
    "src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot?#iefix') format('embedded-opentype')," +
        "url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.woff2') format('woff2')," +
        "url('ColumbiaSansW-Light.woff') format('woff');" +
    "font-weight: normal;" +
    "font-style: normal;" +
    "font-display: swap;"
    + "}"+
    "@font-face {" + 
"font-family: 'FS Emeric Extra Bold';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric Light';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans W Extra Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans Extra Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Columbia Sans Light';" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot');" +
"src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Medium Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Light Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-Italic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-Italic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Bold Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Extra Light Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+
"@font-face {" + 
"font-family: 'Inter Extra Bold Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'FS Emeric Bold';" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Black Italic';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}"+

"@font-face {" + 
"font-family: 'Inter Bold';" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot');" +
"src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot?#iefix') format('embedded-opentype')," +
"url('{$url}/legacy/custom/webfonts/Inter-Bold.woff2') format('woff2')," +
"url('{$url}/legacy/custom/webfonts/Inter-Bold.woff') format('woff');" +
"font-weight: normal;" +
"font-style: normal;" +
"font-display: swap;" +
"}",
    		theme_advanced_toolbar_align : "left",
    		mode: "exact",
			elements : "pdfheader,pdffooter",
			theme_advanced_toolbar_location : "top",
			theme_advanced_buttons1: "code,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,undo,redo,separator,forecolor,backcolor,separator,styleprops,styleselect,formatselect,fontselect,fontsizeselect,separator,insertdate",
			theme_advanced_buttons2 : "",
    		theme_advanced_buttons3 : "",
    		theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Columbia Sans Extra Light=Columbia Sans Extra Light;Columbia Sans Light=Columbia Sans Light;Columbia Sans W Extra Light=Columbia Sans W Extra Light;Columbia Sans W Light=Columbia Sans W Light;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;FS Emeric Bold=FS Emeric Bold;FS Emeric Core=FS Emeric Core;FS Emeric Extra Bold=FS Emeric Extra Bold;FS Emeric Extra Light=FS Emeric Extra Light;FS Emeric Light=FS Emeric Light;FS Emeric Medium=FS Emeric Medium;FS Emeric Regular=FS Emeric;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helveticaneue,sans-serif;Impact=impact,chicago;Inter Black=Inter Black;Inter Black Italic=Inter Black Italic;Inter Bold=Inter Bold;Inter Bold Italic=Inter Bold Italic;Inter Extra Bold=Inter Extra Bold;Inter Extra Bold Italic=Inter Extra Bold Italic;Inter Extra Light=Inter Extra Light;Inter Extra Light Italic=Inter Extra Light Italic;Inter Italic=Inter Italic;Inter Light=Inter Light;Inter Light Italic=Inter Light Italic;Inter Medium=Inter Medium;Inter Medium Italic=Inter Medium Italic;Inter Semi Bold=Inter Semi Bold;Inter Thin=Inter Thin;Pitch Sans Regular=Pitch Sans;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
			plugins : "advhr,insertdatetime,table,paste,searchreplace,directionality,style",
			width: "100%",
			inline_styles : true,
			directionality : "ltr",
			entity_encoding: 'raw',
			cleanup_on_startup : true,
			strict_loading_mode : true,
			convert_urls : false,
			remove_redundant_brs : true,
			plugin_insertdate_dateFormat : '{DATE '+df+'}',
			extended_valid_elements : "textblock,barcode[*]",
			custom_elements: "textblock",
		});

		</script>

JS;
        echo $js;
    }


}

