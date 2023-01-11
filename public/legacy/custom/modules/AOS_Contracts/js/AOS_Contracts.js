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
    QSCallbacksArray['EditView_associate_hotels_contracts_sqs'] = multirelate_callback_function;
}
YAHOO.util.Event.onDOMReady(loadSQS);
