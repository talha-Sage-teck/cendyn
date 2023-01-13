function send_back_selected_custom(module, form, field, error_message, request_data) {
    let array_contents = Array();
    let j = 0;

    let req_data = JSON.parse(window.document.forms['popup_query_form'].request_data.value);
    let field_to_name_array = req_data.field_to_name_array;
    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].name === field) {
            if (form.elements[i].checked === true) {
                ++j;
                array_contents.push('"' + "ID_" + j + '":"' + form.elements[i].value + '"');
            }
        }
    }

    if (array_contents.length === 0) {
        window.alert(error_message);
        return;
    }

    SUGAR.util.globalEval("var selection_list_array = {" + array_contents.join(",") + "}");

    let form_request_data = window.document.forms['popup_query_form'].request_data.value;

    if (/^[\],:{}\s]*$/.test(form_request_data.replace(/\\["\\\/bfnrtu]/g, '@').replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g, ']').replace(/(?:^|:|,)(?:\s*\[)+/g, ''))) {
        SUGAR.util.globalEval("var temp_request_data = " + window.document.forms['popup_query_form'].request_data.value);
    } else {
        return;
    }

    if (temp_request_data.jsonObject) {
        var request_data = temp_request_data.jsonObject;
    } else {
        var request_data = temp_request_data; // passed data that is NOT incorrectly encoded via JSON.encode();
    }

    let passthru_data = Object();
    if (typeof(request_data.passthru_data) != 'undefined') {
        passthru_data = request_data.passthru_data;
    }
    let form_name = request_data.form_name;


    let ids_arr = [];
    let names_arr = [];
    for(let v in selection_list_array) {
        let associated_row_data = associated_javascript_data[selection_list_array[v]];
        ids_arr.push(selection_list_array[v]);
        names_arr.push(associated_row_data['NAME']);
    }

    SUGAR.util.globalEval("var call_back_function = window.opener." + request_data.call_back_function);
    let result_data = {
        "form_name": form_name,
        "selection_list": selection_list_array,
        "passthru_data": passthru_data,
        "name_to_value_array": field_to_name_array,
        "row_data": {"ids": ids_arr, "names": names_arr},
        "select_entire_list": form.select_entire_list.value,
        "current_query_by_page": form.current_query_by_page.value
    };
    call_back_function(result_data);
    closePopup();

}
