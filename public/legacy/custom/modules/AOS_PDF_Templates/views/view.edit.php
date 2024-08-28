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
        require_once("custom/modules/AOS_PDF_Templates/fontdef.php");

        global $locale;
        $tiny = new SugarTinyMCE();
        $tinyMCE = $tiny->getConfig();
        $css=<<<CSS

        <style>

        {$font_def}

        </style>

CSS;


        echo $css;

        //Change fontdefs format to cater javascript
        $formattedFontDef=str_replace(array("\r", "\n"), ' ', $font_def);
        $formattedFontDef=trim($formattedFontDef); // Remove any extra spaces
        $js =<<<JS
        

		<script language="javascript" type="text/javascript">
		$tinyMCE
		var df = '{$locale->getPrecedentPreference('default_date_format')}';
        
		tinyMCE.init({
            
    		theme : "advanced",
            content_style:"{$formattedFontDef}",
    		theme_advanced_toolbar_align : "left",
    		mode: "exact",
			elements : "description",
			theme_advanced_toolbar_location : "top",
			theme_advanced_buttons1: "code,help,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,forecolor,backcolor,separator,styleprops,styleselect,formatselect,fontselect,fontsizeselect",
			theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,selectall,separator,search,replace,separator,bullist,numlist,separator,outdent,indent,separator,ltr,rtl,separator,undo,redo,separator, link,unlink,anchor,image,separator,sub,sup,separator,charmap,visualaid",
			theme_advanced_buttons3: "tablecontrols,separator,advhr,hr,removeformat,separator,insertdate,pagebreak",
			theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Columbia Sans Extra Light=Columbia Sans Extra Light;Columbia Sans Light=Columbia Sans Light;Columbia Sans W Extra Light=Columbia Sans W Extra Light;Columbia Sans W Light=Columbia Sans W Light;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;FS Emeric Bold=FS Emeric Bold;FS Emeric Core=FS Emeric Core;FS Emeric Extra Bold=FS Emeric Extra Bold;FS Emeric Extra Light=FS Emeric Extra Light;FS Emeric Light=FS Emeric Light;FS Emeric Medium=FS Emeric Medium;FS Emeric Regular=FS Emeric;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helvetica neue;Impact=impact,chicago;Inter Black=Inter Black;Inter Black Italic=Inter Black Italic;Inter Bold=Inter Bold;Inter Bold Italic=Inter Bold Italic;Inter Extra Bold=Inter Extra Bold;Inter Extra Bold Italic=Inter Extra Bold Italic;Inter Extra Light=Inter Extra Light;Inter Extra Light Italic=Inter Extra Light Italic;Inter Italic=Inter Italic;Inter Light=Inter Light;Inter Light Italic=Inter Light Italic;Inter Medium=Inter Medium;Inter Medium Italic=Inter Medium Italic;Inter Semi Bold=Inter Semi Bold;Inter Thin=Inter Thin;Pitch Sans Regular=Pitch Sans;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
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
            content_style:"{$formattedFontDef}",
    		theme_advanced_toolbar_align : "left",
    		mode: "exact",
			elements : "pdfheader,pdffooter",
			theme_advanced_toolbar_location : "top",
			theme_advanced_buttons1: "code,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,justifyfull,separator,undo,redo,separator,forecolor,backcolor,separator,styleprops,styleselect,formatselect,fontselect,fontsizeselect,separator,insertdate",
			theme_advanced_buttons2 : "",
    		theme_advanced_buttons3 : "",
    		theme_advanced_fonts:"Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Columbia Sans Extra Light=Columbia Sans Extra Light;Columbia Sans Light=Columbia Sans Light;Columbia Sans W Extra Light=Columbia Sans W Extra Light;Columbia Sans W Light=Columbia Sans W Light;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;FS Emeric Bold=FS Emeric Bold;FS Emeric Core=FS Emeric Core;FS Emeric Extra Bold=FS Emeric Extra Bold;FS Emeric Extra Light=FS Emeric Extra Light;FS Emeric Light=FS Emeric Light;FS Emeric Medium=FS Emeric Medium;FS Emeric Regular=FS Emeric;Georgia=georgia,palatino;Helvetica=helvetica;Helvetica Neu=helvetica neue;Impact=impact,chicago;Inter Black=Inter Black;Inter Black Italic=Inter Black Italic;Inter Bold=Inter Bold;Inter Bold Italic=Inter Bold Italic;Inter Extra Bold=Inter Extra Bold;Inter Extra Bold Italic=Inter Extra Bold Italic;Inter Extra Light=Inter Extra Light;Inter Extra Light Italic=Inter Extra Light Italic;Inter Italic=Inter Italic;Inter Light=Inter Light;Inter Light Italic=Inter Light Italic;Inter Medium=Inter Medium;Inter Medium Italic=Inter Medium Italic;Inter Semi Bold=Inter Semi Bold;Inter Thin=Inter Thin;Pitch Sans Regular=Pitch Sans;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=verdana;Webdings=webdings;Wingdings=wingdings,zapf dingbats",
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

