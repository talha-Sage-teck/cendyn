<link rel="stylesheet" type="text/css" href="{sugar_getjspath file='modules/Connectors/tpls/tabs.css'}"/>
<script type="text/javascript" src="cache/include/javascript/sugar_grp_yui_widgets.js"></script>
<script type="text/javascript">
    {literal}

    function clearAll() {
        for (const option of document.querySelector('#tabs'))
            if (option.selected && option.selected !== false)
                option.removeAttribute('selected');
        for (const option of document.querySelector('#users'))
            if (option.selected && option.selected !== false)
                option.removeAttribute('selected');
    }

    function setupDashboardSettings(configID) {
        document.getElementById('configid').value = configID;
        let config;
        configs.forEach((conf) => {
            if(conf.id == configID)
                config = conf;
        });

        if(!config) {
            clearAll();
            return;
        }

        let selectedTabs = config.tabs;
        let selectedUsers = config.users;

        for (const option of document.querySelector('#tabs')) {
            const value = option.value;
            if (selectedTabs.indexOf(value) !== -1)
                option.setAttribute('selected', 'selected');
            else
                option.removeAttribute('selected');
        }

        for (const option of document.querySelector('#users')) {
            const value = option.value;
            if (selectedUsers.indexOf(value) !== -1)
                option.setAttribute('selected', 'selected');
            else
                option.removeAttribute('selected');
        }
    }

    function updateDashboard() {
        create = false;
        document.getElementById('config_name').value = "";
        document.getElementById('config_name').style.display = "none";
        document.getElementById('update_link').style.display = "none";
        document.getElementById('create_link').style.display = "block";
        document.getElementById('configs').style.display = "block";
        const configs = document.getElementById("configs");
        configs.addEventListener('change', (configID) => {
            setupDashboardSettings(configID.target.value);
        });
    }

    function createNewDashboard() {
        create = true;
        document.getElementById('configid').value = "";
        document.getElementById('configs').style.display = "none";
        document.getElementById('create_link').style.display = "none";
        document.getElementById('update_link').style.display = "block";
        document.getElementById('config_name').style.display = "block";
        clearAll();
    }
    {/literal}
</script>
<form name="dashboardConfigForm" id="dashboardConfigForm" method="POST" action="index.php">
    <input type="hidden" id="module" name="module" value="Users">
    <input type="hidden" id="action" name="action" value="saveStandardDashboardConfig">
    <input type="hidden" id="configid" name="configid">
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
                <div id="main" style='margin-bottom:5px; margin-top:5px' >
                    <br />
                    <p>
                        <b>Note:</b> If you clear a configuration and save, the selected tabs will not longer show in the users' dashboards.
                        However, the config name will still be listed for later use.
                    </p><br />
                    <b>IMPORTANT:</b>
                    <ul>
                        <li>Make sure to unassign users from a tab if you choose to delete a tab from homepage dashboard.</li>
                        <li>Always sync after performing any individual ADD TAB or DELETE TAB operation from dashboard.</li>
                    </ul>
                    <br />
                    <table class="themeSettings edit view" style='margin-bottom:0px; margin-top:5px' border="0" cellspacing="3" cellpadding="10">
                        <tr style="padding-bottom: 10px!important;">
                            <td valign="top" width="12.5%" scope="col">
                                <label>Edit or Create Dashboard Config</label>
                            </td>
                            <td valign="top" width="37.5%">
                                <input style="display: none;" type="text" id="config_name" name="configs_name" />
                                <select id="configs" name="configs" style="width: 300px">
                                    <option value="">-- Select --</option>
                                </select>
                            </td>
                            <td valign="top" width="70px" style="text-align: left" scope="col">
                                <div id="create_link">
                                    <a id="creator" style="display: inline-block;" href="javascript:createNewDashboard();">Create new Dashboard Config</a> |
                                    <a id="deleter" style="display: inline-block;" href="javascript:clearAll();">Clear this Dashboard</a>
                                </div>
                                <a id="update_link" style="display: none;" href="javascript:updateDashboard();">Update a Dashboard</a>
                            </td>
                        </tr>
                        <tr style="padding-bottom: 10px!important;">
                            <td valign="top" width="12.5%" scope="col">
                                <label>Selected Tabs</label>
                            </td>
                            <td valign="top" width="37.5%">
                                <select id="tabs" name="tabs[]" multiple size="6" style="width: 300px; height: 100px"></select>
                            </td>
                        </tr>
                        <tr style="padding-bottom: 10px!important;">
                            <td valign="top" width="12.5%" scope="col">
                                <label>Selected Users</label>
                            </td>
                            <td valign="top" width="37.5%">
                                <select id="users" name="users[]" multiple size="6" style="width: 300px; height: 200px"></select>
                            </td>
                        </tr>
                    </table>
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
        let dashlets = [];
        let tabIndices = getSelectValues(document.getElementById('tabs'));
        tabIndices.forEach((i) => {
            let dash = tabDetails[parseInt(i)];
            dash.id = tab_ids[parseInt(i)];
            dashlets.push(dash);
        });

        const configid = document.getElementById('configid');
        let users = getSelectValues(document.getElementById('users'));
        const form = document.getElementById('dashboardConfigForm');
        var configdb = configs;

        if(configid.value.trim() === '') {
            const config_name = document.getElementById('config_name').value;
            if(config_name.trim() === '') {
                alert("Empty name not allowed.");
                return;
            }
            else if(tabIndices.length === 0) {
                alert("Must select at least one tab for configuration.");
                return;
            }
            else if(users.length === 0) {
                alert("Must select at least one user for configuration.");
                return;
            }
            else {
                let conf = {
                    id: uuidv4(),
                    name: config_name,
                    tabs: tabIndices,
                    dashlets: dashlets,
                    users: users,
                    update: 1
                };
                configdb.push(conf);
            }
        }
        else {
            if(document.getElementById('configs') && document.getElementById('configs').value.trim() !== '') {
                if((tabIndices.length === 0 && users.length === 0) || tabIndices.length === 0) {
                    alert('Choose at least one tab.');
                    return;
                }

                let conf = {
                    id: configid.value,
                    tabs: tabIndices,
                    dashlets: dashlets,
                    users: users,
                    update: 1
                };
                let nam, i;
                configs.forEach((co, index) => {
                    if(co.id === configid.value) {
                        nam = co.name;
                        i = index;
                    }
                });
                conf['name'] = nam;
                configdb[i] = conf;
            }
            else {
                alert("Must select one config to update.");
                return;
            }
        }

        const co = document.createElement('input');
        co.type = 'hidden';
        co.name = 'dashboard';
        co.value = JSON.stringify(configdb).replaceAll('"', '&quot;');

        const od = document.createElement('input');
        od.type = 'hidden';
        od.name = 'tab_ids';
        od.value = JSON.stringify(tab_ids).replaceAll('"', '&quot;');

        const da = document.createElement('input');
        da.type = 'hidden';
        da.name = 'dashlets';
        da.value = JSON.stringify(dass).replaceAll('"', '&quot;');

        form.appendChild(co);
        form.appendChild(od);
        form.appendChild(da);
        document.dashboardConfigForm.submit();
    }

    SUGAR.cancelAdminConfig = function () {
        document.dashboardConfigForm.action.value = 'index';
        document.dashboardConfigForm.module.value = 'Administration';
        document.dashboardConfigForm.submit();
    }

    YAHOO.util.Event.onDOMReady(function () {
        populateConfigs();
        manageTabDeletion();
        populateTabOptions();
        populateUsersOptions();
        const configs = document.getElementById("configs");
        configs.addEventListener('change', (configID) => {
            setupDashboardSettings(configID.target.value);
        });

    });

    function populateConfigs() {
        if(!Array.isArray(configs))
            return;
        const select = document.getElementById('configs');
        configs.forEach(function (config) {
            const opt = document.createElement('option');
            opt.value = config.id;
            opt.label = config.name;
            select.appendChild(opt);
            config.update = 0;
        });
    }

    function manageTabDeletion() {
        let fil_tab_ids = [];
        tabDetails.forEach(function(tabDetail) {
            fil_tab_ids.push(tabDetail.id);
        });
        tab_ids = tab_ids.filter(x => !fil_tab_ids.includes(x));
    }

    function getSelectValues(select) {
        let result = [];
        let options = select && select.options;
        let opt;
        for (let i = 0, iLen=options.length; i<iLen; i++) {
            opt = options[i];
            if (opt.selected)
                result.push(opt.value || opt.text);
        }
        return result;
    }

    function populateTabOptions() {
        if(!Array.isArray(tab_names))
            return;

        const select = document.getElementById('tabs');
        tab_names.forEach(function (tab, index) {
            const opt = document.createElement('option');
            if(!tab_ids[index])
                tab_ids[index] = uuidv4();

            opt.value = index;
            opt.label = tab;
            select.appendChild(opt);
        });
    }

    function populateUsersOptions() {
        if(!Array.isArray(users))
            return;

        const select = document.getElementById('users');
        users.forEach(function (user) {
            const opt = document.createElement('option');
            opt.value = user.id;
            opt.label = user.user_name;
            select.appendChild(opt);
        });
    }

    function uuidv4() {
        return ([1e7]+-1e3+-4e3+-8e3+-1e11).replace(/[018]/g, c =>
            (c ^ crypto.getRandomValues(new Uint8Array(1))[0] & 15 >> c / 4).toString(16)
        );
    }
    {/literal}
</script>
