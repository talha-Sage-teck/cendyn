
<div style='width: 400px'>
<form name='ttconfigure_{$id}' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_{$id}", SUGAR.mySugar.uncoverPage);' />
<input type='hidden' name='id' value='{$id}' />
<input type='hidden' name='module' value='{$module}' />
<input type='hidden' name='action' value='DynamicAction' />
<input type='hidden' name='DynamicAction' value='configureDashlet' />
<input type='hidden' name='to_pdf' value='true' />
<input type='hidden' name='configure' value='true' />
<input type='hidden' id='dashletType' name='dashletType' value='{$dashletType}' />

<table width="400" cellpadding="10" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td valign='top' nowrap class='dataLabel'>{$LBL_LEAD_SOURCES}</td>
    <td valign='top' class='dataField'>
    	<select name="pmsbals_account_link_status[]" multiple size='3'>
    		{$selected_datax}
    	</select>
    </td>
</tr>
<tr>
    <td valign='top' nowrap class='dataLabel'>{$LBL_USERS}</td>
	<td valign='top' class='dataField'>
		<select name="pmsbals_ids[]" multiple size='3'>
			{$pmsbals_ids}
		</select>
	</td>
</tr>

<tr>
    <td align="right" colspan="2">
        <input type='submit' onclick="" class='button' value='{$LBL_SUBMIT_BUTTON_LABEL}'>
   	</td>
</tr>
</table>
</form>
</div>