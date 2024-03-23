function loadSQS() {
    sqs_objects['EditView_associate_hotels_contracts_sqs'] = {
        "form": "EditView",
        "method": "query",
        "modules": [
            "CB2B_Hotels"
        ],
        "group": "or",
        "field_list": [
            "name",
            "id"
        ],
        "populate_list": [
            "associate_hotels_contracts_sqs",
            "cb2b_hotels_id_sqs"
        ],
        "required_list": [],
        "conditions": [
            {
                "name": "name",
                "op": "like_custom",
                "end": "%",
                "value": ""
            }
        ],
        "order": "name",
        "limit": "30",
        "no_match_text": "No Match"
    };
    // QSCallbacksArray['EditView_associate_hotels_contracts_sqs'] = multirelate_callback_function;
}
//
//Element.prototype.insertChildAtIndex = function(child, index) {
//    if (!index)
//        index = 0;
//    if (index >= this.children.length) {
//        this.appendChild(child);
//    } else {
//        this.insertBefore(child, this.children[index]);
//    }
//}
//
//function getFieldsInRow(row) {
//    let presets = [];
//    Array.from(row.children).forEach((field, index) => {
//        if(field.getAttribute('data-field') !== null && field.getAttribute('data-field') !== '')
//            presets.push(index);
//    });
//    return presets;
//}
//
//function findFillers(row) {
//    let pos = [];
//    Array.from(row.children).forEach((field, index) => {
//        if(field.getAttribute('data-field') !== null && field.getAttribute('data-field') === '')
//            pos.push(index);
//    });
//    return pos;
//}
//
//function handleReusableFields(panel, panelNum) {
//    /***
//    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//    !!!!!!!!!!! ANY CHANGES MADE TO EDITVIEWDEFS MANUALLY OR THROUGH STUDIO MAY AFFECT THIS CONFIGURATION !!!!!!!!!!!!!
//    !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//
//     @INFO:
//     Mapping array saves the positions for all the fields that are common between at least two components.
//     1. Only common fields are configured here
//     2. Only check for empty values when iterating, if a field exists, it is understood it is common between at least
//     panels.
//     3. This mapping array DEPENDS on the editviewdefs.php configuration for the current panel.
//     4. "Current Panel" means the panel at the HTML DOM index present in panelNum
//
//     @INSTRUCTIONS:
//     For future changes, keep these things in mind:
//     1. Do not remove the fields present in this array from the editviewdefs.php
//     2. Non-empty positions in these arrays must be left empty in the respective panel in editviewdefs.php
//     3. If such a position is not empty, this config will try to override and the UI may become very confusing.
//
//     @NOTE: You can keep the same field in its eventual position.
//     */
//
//    // insert fields
//    mapping[panelNum].forEach((row, rowNum) => {
//        let dom_row = panel.children[1].children[0].children[rowNum];
//        if(dom_row) {
//            let fillers = findFillers(dom_row);
//            let presets = getFieldsInRow(dom_row);
//            if (fillers.length > 0) { //position greater than 1 means many fillers
//                for (let p = fillers.length - 1; p >= 0; --p)
//                    dom_row.removeChild(dom_row.children[fillers[p]]);
//            }
//
//            // if there is exactly one field in a row, add a filler
//            if (presets.length === 0 && row.filter(Boolean).length < 2)
//                dom_row.innerHTML = "<div class=\"col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered\" data-field>" +
//                    "<div class=\"edit-dotted-border\"></div>" +
//                    "</div>";
//            else if (presets.length === 1 && row.filter(Boolean).length === 1 && presets[0] === row.indexOf(row.filter(Boolean)[0])) {
//                // if the field in row configuration is already preset in the editviewdefs.php, only add a filler
//                let ind = row.indexOf(row.filter(Boolean)[0]);
//                let fill = "<div class=\"col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered\" data-field>" +
//                    "<div class=\"edit-dotted-border\"></div>" +
//                    "</div>";
//                let fill_pos = ind === 1 ? 'afterbegin' : 'beforeend';
//                dom_row.insertAdjacentHTML(fill_pos, fill);
//            }
//
//            row.forEach((field, fieldNum) => {
//                if (field.trim().length === 0)
//                    return;
//                let fieldDOM = document.querySelector("[data-field=" + CSS.escape(field) + "]");
//                if(!fieldDOM.isSameNode(dom_row.children[fieldNum]))
//                    dom_row.insertChildAtIndex(fieldDOM, fieldNum);
//            });
//        }
//    });
//
//}
//
//function populate_conditional_fields(panelNum) {
//
//    /***
//     !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//     !!!! THE STATUS FIELD VALUES (A, T, R) HAVE BEEN HARDCODED, CHANGE THEM IN THE ARRAY ACCORDINGLY  !!!!
//     !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//     */
//
//    //Hide all concerning fields initially
//    all_conditional_fields[panelNum].forEach((field) => {
//        document.querySelector('[data-field=' + field + ']').style.display = "none";
//    });
//
//    //show only the ones that are needed to show
//    let status = document.getElementById('status').value;
//    if(Object.keys(conditions[panelNum]).length > 0 && Object.keys(conditions[panelNum]).includes(status)) {
//        conditions[panelNum][status].forEach((field) => {
//            document.querySelector('[data-field=' + field + ']').style.display = "block";
//        });
//    }
//}
//
//function undoConditionalFieldsDeletion(panelNum) {
//    default_to_hide[panelNum].forEach((field) => {
//        document.querySelector('[data-field=' + field + ']').style.display = "block";
//    });
//    all_conditional_fields[panelNum].forEach((field) => {
//        document.querySelector('[data-field=' + field + ']').style.display = "block";
//    });
//}
//
//function handleUnusedFields(current_panel) {
//    /***
//     * Hide the fields that were present in previous panel, but are not present in current panel's config.
//     * These fields are those that were originally present in default panel
//     * @Steps
//     * 1. Identify unused fields
//     * 2. Check if the unused fields should be in the default panel
//     * 3. Delete
//     */
//
//    // let active_fields = [];
//    // let current_fields = [];
//    // mapping[previous_panel].forEach((arr) => {
//    //     active_fields = active_fields.concat([...arr.filter(Boolean)]);
//    // });
//    // mapping[current_panel].forEach((arr) => {
//    //     current_fields = current_fields.concat([...arr.filter(Boolean)]);
//    // });
//    default_to_hide[current_panel].forEach((field) => {
//        document.querySelector('[data-field=' + field + ']').style.display = "none";
//    });
//}
//
//function configure(target) {
//    let panel_content = document.getElementsByClassName("panel-content")[0];
//    let default_panel = panel_content.children[0];
//    let contracted = panel_content.children[1];
//    let brochure = panel_content.children[2];
//    let allotment = panel_content.children[3];
//    let consortia = panel_content.children[4];
//    let commission = panel_content.children[5];
//    let corporate = panel_content.children[6];
//    let connectivity = panel_content.children[7];
//    let other = panel_content.children[8];
//    let dmc = panel_content.children[9];
//    switch (target.options[target.selectedIndex].value) {
//        case "EGC":
//            current_panel = 1;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(contracted, 1);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(1);
//            contracted.style.display = "block";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "BRO":
//            current_panel = 2;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(brochure, 2);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(2);
//            contracted.style.display = "none";
//            brochure.style.display = "block";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "ALL":
//            current_panel = 3;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(allotment, 3);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(3);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "block";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "CON":
//            current_panel = 4;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(consortia, 4);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(4);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "block";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "COM":
//            current_panel = 5;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(commission, 5);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(5);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "block";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "COR":
//            current_panel = 6;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(corporate, 6);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(6);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "block";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "COA":
//            current_panel = 7;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(connectivity, 7);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(7);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "block";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//        case "OTH":
//            current_panel = 8;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(other, 8);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(8);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "block";
//            dmc.style.display = "none";
//            break;
//        case "DMC":
//            current_panel = 9;
//            handleReusableFields(default_panel, 0);
//            handleReusableFields(dmc, 9);
//            handleUnusedFields(current_panel);
//            populate_conditional_fields(9);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "block";
//            break;
//        default: //Default panel
//            current_panel = 0;
//            handleReusableFields(default_panel, 0);
//            // handleUnusedFields(current_panel, 0);
//            populate_conditional_fields(0);
//            contracted.style.display = "none";
//            brochure.style.display = "none";
//            allotment.style.display = "none";
//            consortia.style.display = "none";
//            commission.style.display = "none";
//            corporate.style.display = "none";
//            connectivity.style.display = "none";
//            other.style.display = "none";
//            dmc.style.display = "none";
//            break;
//    }
//}
//
//function transformEditView() {
//    let contract_type = document.getElementById('contract_type');
//    contract_type.addEventListener('change', (event) => {
//        undoConditionalFieldsDeletion(current_panel);
//        configure(event.target);
//    });
//    configure(contract_type);
//    document.getElementById('status').addEventListener('change', () => {
//        populate_conditional_fields(current_panel);
//    });
//}
//
function init() {
//    transformEditView();
    loadSQS();
}
//
//function deleteAttachmentF()
//{
//    document.getElementById('new_attachment').style.display = 'block';
//    document.getElementById('old_attachment').style.display = 'none';
//    document.getElementById('deleteAttachment').value = '1';
//}
//
YAHOO.util.Event.onDOMReady(init);
//
//var current_panel = 0;
//var all_conditional_fields = [
//    [],
//    ['effective_date', 'signed_date', 'termination_date', 'eg_new_signed_date', 'eg_new_date'],
//    [],
//    [],
//    [],
//    [],
//    [],
//    ['effective_date', 'signed_date', 'termination_date'],
//    [],
//    []
//];
//
//var default_to_hide = [
//    [],
//    [],
//    [],
//    [],
//    [],
//    [],
//    [],
//    [],
//    [],
//    ['associate_hotels_contracts']
//];
//
//var conditions = [
//    {},
//    {
//        'A': ['effective_date', 'signed_date'],
//        'T': ['termination_date'],
//        'R': ['eg_new_date', 'eg_new_signed_date']
//    },
//    {},
//    {},
//    {},
//    {},
//    {},
//    {
//        'A': ['effective_date', 'signed_date'],
//        'T': ['termination_date']
//    },
//    {},
//    {}
//];
//
//var mapping = [ //Dynamic Panels
//    [ // Default
//        [],
//        [],
//        [],
//        [],
//        [],
//        [],
//        [],
//        [],
//        ['associate_hotels_contracts'],
//    ],
//    [ //Contracted Panel
//        ['associate_hotels_contracts', ''],
//        ['effective_date', 'signed_date'],
//        ['', ''],
//        ['', 'termination_date']
//    ],
//    [ //Brochure Panel
//        ['associate_hotels_contracts'],
//        ['effective_date', 'signed_date'],
//        ['date_of_issue', 'date_end'],
//        ['', 'revision_1_date'],
//        ['', 'revision_1'],
//        ['', 'revision_2_date'],
//        ['', 'revision_2'],
//        ['attachment', 'revision_3_date'],
//        ['special_information', 'revision_3'],
//        ['', 'revision_4_date'],
//        ['', 'revision_4']
//    ],
//    [ //Allotment Panel
//        ['associate_hotels_contracts'],
//        ['', 'date_of_issue'],
//        ['effective_date', 'date_end'],
//        ['', 'signed_date'],
//        ['black_out_dates', 'revision_1_date'],
//        ['special_information', 'revision_1'],
//        ['attachment', 'revision_2_date'],
//        ['', 'revision_2'],
//        ['', 'revision_3_date'],
//        ['', 'revision_3'],
//        ['', 'revision_4_date'],
//        ['', 'revision_4']
//    ],
//    [ //Consortia Panel
//        ['associate_hotels_contracts', ''],
//        ['effective_date', 'date_end'],
//        ['commission', 'value_additions'],
//        ['special_information']
//    ],
//    [ //Commission or Enhanced Panel
//        ['associate_hotels_contracts', ''],
//        ['date_of_issue', 'effective_date'],
//        ['signed_date', 'date_end'],
//        ['commission', 'value_additions'],
//        ['special_information', '']
//    ],
//    [ //Corporate
//        ['associate_hotels_contracts', ''],
//        ['date_of_issue', 'effective_date'],
//        ['signed_date', 'date_end'],
//        ['purpose', 'black_out_dates'],
//        ['special_information', 'other_information'],
//        ['attachment', 'revision_1_date'],
//        ['', 'revision_1'],
//        ['', 'revision_2_date'],
//        ['', 'revision_2'],
//        ['', 'revision_3_date'],
//        ['', 'revision_3'],
//        ['', 'revision_4_date'],
//        ['', 'revision_4']
//    ],
//    [ //Connectivity
//        ['associate_hotels_contracts', ''],
//        [ 'effective_date', 'signed_date'],
//        ['attachment', 'termination_date'],
//        ['', 'special_information'],
//    ],
//    [ //Other
//        ['associate_hotels_contracts', ''],
//        ['date_of_issue', 'effective_date'],
//        ['signed_date', 'date_end'],
//        ['purpose', 'black_out_dates'],
//        ['special_information', 'other_information'],
//        ['attachment', 'revision_1_date'],
//        ['', 'revision_1'],
//        ['', 'revision_2_date'],
//        ['', 'revision_2'],
//        ['', 'revision_3_date'],
//        ['', 'revision_3'],
//        ['', 'revision_4_date'],
//        ['', 'revision_4']
//    ],
//    [ //DMC
//        ['date_of_issue', 'effective_date'],
//        ['signed_date', 'date_end'],
//        ['', 'commission'],
//        ['value_additions', 'special_information'],
//        ['attachment', 'revision_1_date'],
//        ['', 'revision_1'],
//        ['', 'revision_2_date'],
//        ['', 'revision_2'],
//        ['', 'revision_3_date'],
//        ['', 'revision_3'],
//        ['', 'revision_4_date'],
//        ['', 'revision_4']
//    ]
//];
