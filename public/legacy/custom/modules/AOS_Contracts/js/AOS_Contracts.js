function loadSQS() {
    sqs_objects['EditView_associate_hotels_contracts'] = {
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
            "associate_hotels_contracts",
            "cb2b_hotels_id"
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
}
YAHOO.util.Event.onDOMReady(loadSQS);
