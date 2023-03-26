{*
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

*}
<link href="custom/include/SugarFields/Fields/Multirelate/css/chips.css" rel="stylesheet" type="text/css"/>
<script>
//Added for multiselect
{{capture name=idname assign=idname}}{{sugarvar key='name'}}{{/capture}}
{{if !empty($displayParams.idName)}}
    {{assign var=idname value=$displayParams.idName}}
{{/if}}

{literal}
function set_return_multiselect(popup_reply_data) {
  from_popup_return = true;
  var form_name = popup_reply_data.form_name;
  var name_to_value_array = popup_reply_data.name_to_value_array;
  var row_data = popup_reply_data.row_data;
  if (typeof name_to_value_array != 'undefined') {
    for (var the_key in name_to_value_array) {
      let elem = name_to_value_array[the_key];
      if (the_key == 'toJSON') {
        /* just ignore */
      } else {
        if (window.document.forms[form_name].elements[elem]) {
          if(window.document.forms[form_name].elements[elem].value.trim() === '')
            window.document.forms[form_name].elements[elem].value = (the_key === "id") ? row_data.ids.join(', ') : row_data.names.join(', ');
          else {
            window.document.forms[form_name].elements[elem].value += ", ";
            window.document.forms[form_name].elements[elem].value += (the_key === "id") ? row_data.ids.join(', ') : row_data.names.join(', ');
          }
        }
      }
    }
    let ids = window.document.forms[form_name].elements[name_to_value_array['id']].value.split(', ');
    let names = window.document.forms[form_name].elements[name_to_value_array['name']].value.split(', ');
    ids = ids.filter((item, index) => {
      if(ids.indexOf(item) !== index) {
          names.splice(index, 1);
          return false;
      }
      return true;
    });
    window.document.forms[form_name].elements[name_to_value_array['id']].value = ids.join(', ');
    window.document.forms[form_name].elements[name_to_value_array['name']].value = names.join(', ');
    plantChips();
  }
}
{/literal}

function multirelate_callback_function(e) {ldelim}
    if(document.querySelector('[name={{sugarvar key='id_name'}}_sqs]').value.trim().length !== 0) {ldelim}
        let ids = document.querySelector('[name={{sugarvar key='id_name'}}]').value;
        let names = document.querySelector('[name={{$idname}}]').value;
        let idsArr = ids.split(', ');
        let namesArr = names.split(', ');
        if(idsArr.indexOf(document.querySelector('[name={{sugarvar key='id_name'}}_sqs]').value) >= 0)
            return;

        idsArr.push(document.querySelector('[name={{sugarvar key='id_name'}}_sqs]').value);
        namesArr.push(document.querySelector('[name={{$idname}}_sqs]').value);
        document.querySelector('[name={{sugarvar key='id_name'}}]').value = idsArr.join(', ');
        document.querySelector('[name={{$idname}}]').value = namesArr.join(', ');
        plantChips();
        document.querySelector('[name={{sugarvar key='id_name'}}_sqs]').value = "";
    {rdelim}
{rdelim}
</script>

<div id="chips_{{$idname}}">
</div>
<br />
<input type="text" name="{{$idname}}" style="display: none;" tabindex="{{$tabindex}}" id="{{$idname}}" size="{{$displayParams.size}}" value="{{sugarvar key='value'}}" title='{{$vardef.help}}' autocomplete="off" {{$displayParams.readOnly}} {{$displayParams.field}}	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} >
<input type="text" name="{{$idname}}_sqs" class={{if empty($displayParams.class) }}"sqsEnabled"{{else}} "{{$displayParams.class}}" {{/if}} tabindex="{{$tabindex}}" id="{{$idname}}_sqs" size="{{$displayParams.size}}" title='{{$vardef.help}}' autocomplete="off" {{$displayParams.readOnly}} {{$displayParams.field}}	{{if !empty($displayParams.accesskey)}} accesskey='{{$displayParams.accesskey}}' {{/if}} >
<input type="hidden" name="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}"
	id="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}"
	{{if !empty($vardef.id_name)}}value="{{sugarvar memberName='vardef.id_name' key='value'}}"{{/if}}>
<input type="hidden" name="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}_sqs"
    id="{{if !empty($displayParams.idNameHidden)}}{{$displayParams.idNameHidden}}{{/if}}{{sugarvar key='id_name'}}_sqs">
<script type="text/javascript">
function removeChip(id) {ldelim}
    let ids = document.querySelector('[name={{sugarvar key='id_name'}}]').value;
    let names = document.querySelector('[name={{$idname}}]').value;
    let idsArr = ids.split(', ');
    let namesArr = names.split(', ');
    const ind = idsArr.indexOf(id);
    if(ind > -1) {ldelim}
        idsArr.splice(ind, 1);
        namesArr.splice(ind, 1);
        document.querySelector('[name={{sugarvar key='id_name'}}]').value = idsArr.join(', ');
        document.querySelector('[name={{$idname}}]').value = namesArr.join(', ');
    {rdelim}
{rdelim}

function plantChips() {ldelim}
    let ids = document.querySelector('[name={{sugarvar key='id_name'}}]').value;
    let names = document.querySelector('[name={{$idname}}]').value;
    let idsArr = ids.split(', ').filter((el) => el.trim().length !== '');
    let namesArr = names.split(', ').filter((el) => el.trim().length !== '');
    let target = document.querySelector('[id=chips_{{$idname}}]');
    target.innerHTML = "";
    for(let i = 0; i < idsArr.length; ++i) {ldelim}
        if(idsArr[i].trim() !== '' || namesArr[i].trim() !== '')
            target.innerHTML += "<div class=\"chip\"><span class=\"chip-content\">" + namesArr[i] + "</span><span class=\"closebtn\" onclick=\"this.parentElement.style.display='none'; removeChip('" + idsArr[i] + "');\">&times;</span></div>";
    {rdelim}
{rdelim}

function setChangeListener() {ldelim}
    {*let opts = document.querySelectorAll('#EditView_{{$idname}}_sqs_results li');*}
    {*opts.forEach(function(el) {ldelim}*}
    {*    el.addEventListener("click", function(e) {ldelim}*}
    {*        multirelate_callback_function(e);*}
    {*    {rdelim});*}
    {*{rdelim});*}
    let el = document.getElementById("{{sugarvar key='id_name'}}_sqs");
    el.addEventListener("change", function(e) {ldelim}
        multirelate_callback_function(e);
    {rdelim});
{rdelim}

function waitForIframe() {ldelim}
    let iframe = window.parent.document.getElementsByTagName('IFRAME')[0];
    let iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
    if (iframeDoc.readyState === 'complete') {ldelim}
        setChangeListener();
        let el = document.getElementById("{{sugarvar key='id_name'}}_sqs");
        const observer = new MutationObserver((mutations) => {ldelim}
            mutations.forEach(mutation => {ldelim}
                if (mutation.type === 'attributes' && mutation.attributeName === 'value') {ldelim}
                    el.dispatchEvent(new Event('change'));
                {rdelim}
            {rdelim});
        {rdelim});
        observer.observe(el, {ldelim} attributes: true {rdelim});
    {rdelim}
{rdelim}

function init() {ldelim}
    plantChips();
    setTimeout(waitForIframe, 500);
{rdelim}

YAHOO.util.Event.onDOMReady(init);
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{{$idname}}']) != 'undefined'",
		enableQS
);
</script>

{{if empty($displayParams.hideButtons) }}
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_{{$idname}}" id="btn_{{$idname}}" tabindex="{{$tabindex}}" title="{sugar_translate label="{{$displayParams.accessKeySelectTitle}}"}" class="firstChild" value="{sugar_translate label="{{$displayParams.accessKeySelectLabel}}"}"
onclick='open_popup(
    "{{sugarvar key='module'}}",
	600,
	400,
	"{{$displayParams.initial_filter}}",
	true,
	false,
	{{$displayParams.popupData}},
	"MULTISELECT",
	true
);' {{if isset($displayParams.javascript.btn)}}{{$displayParams.javascript.btn}}{{/if}}>
{sugar_getimage name="cursor" attr='border="0"'}
{{/if}}
{{if !empty($displayParams.allowNewValue) }}
<input type="hidden" name="{{$idname}}_allow_new_value" id="{{$idname}}_allow_new_value" value="true">
{{/if}}
