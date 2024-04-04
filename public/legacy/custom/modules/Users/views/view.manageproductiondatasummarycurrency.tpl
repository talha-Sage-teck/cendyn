
<script type="text/javascript">
    {literal}
        function verify_data(formName) {
            var f = document.getElementById(formName);

            if (f.elements['selected_pms_production_data_summary_currency'].value == "corporate_currency"
                    && f.elements['selected_corporate_currency_options'].value == "") {
                alert("Please select Corporate Currency");
                return false;
            }

            return true;
        }
    </script>
{/literal}
<BR>
<form id="manageProductionDataSummaryCurrency" name="manageProductionDataSummaryCurrency" enctype='multipart/form-data' method="POST"
      action="index.php?module=Users&action=saveManageProductionDataSummaryCurrency&process=true">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
        <tr>
            <td>
                <div class="action-button">
                    <input title="{$APP.LBL_SAVE_BUTTON_TITLE}"
                           accessKey="{$APP.LBL_SAVE_BUTTON_KEY}"
                           class="button primary"
                           type="submit"
                           name="save"
                           onclick="return verify_data('manageProductionDataSummaryCurrency');"
                           value="  {$APP.LBL_SAVE_BUTTON_LABEL}  " >
                    &nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  " > 
                </div>
            </td>
        </tr>
        <BR>
    </table>


    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr>
            <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_PMS_RODUCTION_DATA_SUMMARY_CURRENCY_SETTINGS}</h4></th>
        </tr>
        <tr id='currency_type'>
            <td scope="row">{$MOD.LBL_PMS_RODUCTION_DATA_SUMMARY_CURRENCY_TYPE}: </td>
            <td>
                {html_options name='selected_pms_production_data_summary_currency' id="selected_pms_production_data_summary_currency" selected=$config.selected_pms_production_data_summary_currency options=$CURRENCY_OPTIONS}
            </td>
        </tr>
        <tr id='corporate_currency_type'>
            <td  scope="row" valign="top">{$MOD.LBL_CORPORATE_CURRENCY}: </td>
            <td>
                {html_options name='selected_corporate_currency_options' id="selected_corporate_currency_options" selected=$config.selected_corporate_currency_options options=$CORPORATE_CURRENCY_OPTIONS}
            </td>
        </tr>
    </table>

    <div class="hide-btn">
        <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary"  type="submit" name="save" value="  {$APP.LBL_SAVE_BUTTON_LABEL}  " />
        &nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}"  onclick="document.location.href = 'index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  " />
    </div>
    {$JAVASCRIPT}
</form>

<script type="text/javascript">
    {literal}
        YAHOO.util.Event.onDOMReady(function () {
            onPageLoadshowHideCorporateCurrency();
            onCurrencyTypeChange();
        });

        function onPageLoadshowHideCorporateCurrency() {
            var f = document.getElementById('manageProductionDataSummaryCurrency');

            if (f.elements['selected_pms_production_data_summary_currency'].value == "usd") {
                // Hide Corporate Currency Row and set to Empty
                document.getElementById('corporate_currency_type').style.display = "none";
                document.getElementById('selected_corporate_currency_options').value = "";
            }
        }

        function onCurrencyTypeChange() {
            const currency_type_dd = document.getElementById("selected_pms_production_data_summary_currency");
            currency_type_dd.addEventListener('change', (currency_type) => {
                console.log(currency_type.target.value);
                if (currency_type.target.value == "corporate_currency") {
                    // Show Corporate Currency Row
                    document.getElementById('corporate_currency_type').style.display = "";
                }
                if (currency_type.target.value == "usd") {
                    // Hide Corporate Currency Row and set to Empty
                    document.getElementById('corporate_currency_type').style.display = "none";
                    document.getElementById('selected_corporate_currency_options').value = "";
                }
            });
        }
    {/literal}
</script>