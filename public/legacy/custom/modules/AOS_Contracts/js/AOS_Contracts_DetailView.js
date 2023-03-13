Element.prototype.insertChildAtIndex = function(child, index) {
    if (!index) index = 0
    if (index >= this.children.length) {
        this.appendChild(child)
    } else {
        this.insertBefore(child, this.children[index])
    }
}

function populate_conditional_fields() {
    let all_conditional_fields = ['eg_effective_date', 'eg_signed_date', 'eg_termination_date', 'eg_new_signed_date', 'eg_new_date'];
    let conditions = {
        'A': ['eg_effective_date', 'eg_signed_date'],
        'T': ['eg_termination_date'],
        'R': ['eg_new_date', 'eg_new_signed_date']
    };
    all_conditional_fields.forEach((field) => {
        document.querySelector('[data-field=' + field + ']').style.display = "none";
    });
    let status = document.getElementById('status').value;
    conditions[status].forEach((field) => {
        document.querySelector('[data-field=' + field + ']').style.display = "block";
    });
}

function configure(target) {
    let panel_content = document.getElementsByClassName("panel-content")[0];
    let associated_hotels = document.querySelector('[data-field=associate_hotels_contracts]').parentElement;
    let contracted = panel_content.children[0];
    let brochure = panel_content.children[1];
    switch (target.value) {
        case "EGC":
            contracted.style.display = "block";
            brochure.style.display = "none";
            contracted.children[1].children[0].insertChildAtIndex(associated_hotels, 0);
            populate_conditional_fields();
            document.getElementById('status').addEventListener('change', populate_conditional_fields);
            break;
        case "BRO":
            contracted.style.display = "none";
            brochure.style.display = "block";
            brochure.children[1].children[0].insertChildAtIndex(associated_hotels, 0);
            break;
        default:
            contracted.style.display = "none";
            brochure.style.display = "none";
            panel_content.children[0].children[1].children[0].insertChildAtIndex(associated_hotels, panel_content.children[0].children[1].children[0].children.length);
            break;
    }
}

function transformDetailView() {
    let contract_type = document.getElementById('contract_type');
    configure(contract_type);
}

function init() {
    transformDetailView();
}

YAHOO.util.Event.onDOMReady(init);
