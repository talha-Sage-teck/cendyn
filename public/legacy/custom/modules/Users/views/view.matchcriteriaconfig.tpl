<link rel="stylesheet" type="text/css" href="{sugar_getjspath file='modules/Connectors/tpls/tabs.css'}"/>
<script type="text/javascript" src="cache/include/javascript/sugar_grp_yui_widgets.js"></script>

<script type="text/javascript">
    {literal}

    var i = -1;

    function showAddButton(del = -1) {
        if(i >= 0) {
            const table = document.querySelector("#criteria tbody");
            let lastItem = table.lastChild;
            if(del >= 0 && lastItem.id === 'c_' + del)
                lastItem = lastItem.previousSibling;
            const addBtn = document.querySelector("#addNew");
            const newParent = lastItem.childNodes.item(lastItem.children.length - 1);
            newParent.appendChild(addBtn);
        }
    }

    function deleteCriterion(id) {
        let tab = document.querySelector("#criteria tbody");
        let children = Array.from(tab.children);
        if(children.length > 1) {
            showAddButton(id);
            let n = null;
            children.forEach((node) => {
                if(node.id === "c_" + id)
                    n = node;
            });
            tab.removeChild(n);
        }
        else {
        }
    }

    function addCriterion(index, options, labels) {
        const tab = document.querySelector("#criteria tbody");
        const tr = document.createElement("tr");
        const td1 = document.createElement("td");
        const td2 = document.createElement("td");
        const td3 = document.createElement("td");
        tr.setAttribute("id", "c_" + index);
        td1.setAttribute("valign", "top");
        td1.setAttribute("width", "12.5%");
        td1.setAttribute("scope", "col");
        td1.innerText = "Matching Criteria :";
        tr.appendChild(td1);
        td2.setAttribute("valign", "top");
        td2.setAttribute("width", "37.5%");
        var opts = "";
        var vals = options.split(',');
        var lbls = labels.split(',');
        vals.forEach((el, ind) => {
            opts += "<option value=\""+el+"\">"+lbls[ind]+"</option>";
        })
        td2.innerHTML = "<select id=\"criterion_" + index + "\" name=\"criteria["+ index +"][]\" multiple=\"true\" size=\"6\" style=\"width:150\" title=\"\" tabindex=\"0\">"+
        opts + "</select>";
        tr.appendChild(td2);
        td3.innerHTML = "<button type=\"button\" class=\"btn btn-danger\" onclick=\"javascript:deleteCriterion("+ index +")\"><span class=\"suitepicon suitepicon-action-minus\"></span></button>";
        tr.appendChild(td3);
        tab.appendChild(tr);
        ++i;
        showAddButton();
    }
    {/literal}
</script>
<form name="superAdminConfigForm" id="superAdminConfigForm" method="POST" action="index.php">
    <input type="hidden" id="module" name="module" value="Users">
    <input type="hidden" id="action" name="action" value="saveMatchCriteriaConfig">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" >
        <tr>
            <td colspan='100'>
                <h2>{$title}</h2>
            </td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
            <td colspan='100'>
                {*UPPER BUTTONS*}
                <table border="0" cellspacing="1" cellpadding="1" class="actionsContainer">
                    <tr>
                        <td>
                            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.saveAdminConfig();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" >
                            <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.cancelAdminConfig();" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">
                        </td>
                    </tr>
                </table>
                {*INNER HTML*}
                <div id="main" style='margin-bottom:5px; margin-top:5px'>
                    <table id="criteria" class="themeSettings edit view" style='margin-bottom:0px; margin-top:5px' border="0" cellspacing="3" cellpadding="10">
                        <tbody></tbody>
                    </table>
                    <span class="input-group-btn">
                        <button type="button" id="addNew" class="btn btn-danger" title="Add Criteria" onclick="javascript:addCriterion(i + 1, '{$vals_s}', '{$labels_s}');">
                            <span class="suitepicon suitepicon-action-plus"></span>
                        </button>
                    </span>
                </div>
                {*LOWER BUTTONS*}
                <table border="0" cellspacing="1" cellpadding="1" class="actionsContainer">
                    <tr>
                        <td>
                            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" onclick="SUGAR.saveAdminConfig();"
                                   type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" >
                            <input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" class="button" onclick="SUGAR.cancelAdminConfig();"
                                   type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<script type="text/javascript">
    {literal}
    SUGAR.saveAdminConfig = function () {
        document.superAdminConfigForm.submit();
    }

    SUGAR.cancelAdminConfig = function () {
        document.superAdminConfigForm.action.value = 'index';
        document.superAdminConfigForm.module.value = 'Administration';
        document.superAdminConfigForm.submit();
    }

    YAHOO.util.Event.onDOMReady(function () {
        if (typeof criteria == 'undefined' || criteria == null)
            criteria = [];
        autoPopulateCriteriaMultiselect();
    });

    function autoPopulateCriteriaMultiselect() {
        let j = 0;
        const addNewButton = document.getElementById("addNew");
        for(let i in criteria) {
            const select = document.getElementById("criterion_" + j);
            if(typeof(select) == 'undefined' || select == null)
                addNewButton.click();
            for (const option of document.querySelectorAll('#criterion_' + j + ' option')) {
                const value = option.value;
                if (criteria[i].indexOf(value) !== -1)
                    option.setAttribute('selected', 'selected');
                else
                    option.removeAttribute('selected');
            }
            ++j;
        }
        if(j === 0)
            addNewButton.click();
    }
    {/literal}
</script>
