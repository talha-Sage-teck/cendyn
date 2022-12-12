/***
 * Custom JavaScript code to call getNextB2BAccountNo entrypoint to fetch the next potential B2BAccountNo for the new account
 * @Condition
 * 1. Run once the page's DOM elements have been loaded
 * @Output
 * Loads the potential B2BAccountNo for the newly created account in the disabled text field
 */

function loadNextB2BAccountNo() {
    if(document.getElementsByName("record")[0].value == '') {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementById("b2b_account_no").innerText = this.responseText;
        };
        xhttp.open("GET", "index.php?entryPoint=getNextB2BAccountNo", true);
        xhttp.send();
    }
}

/***
 * Custom JavaScript code to toggle display for IATA and B2BCommission field
 * @Condition
 * 1. The fields will only show when accountbasetype field is equal to T (Travel Agent)
 * 2. The fields will be hidden in case the value of accountbasetype is anything other than T
 * 3. The old value present in the text field will be truncated when the field is shown again.
 * @Output
 * Shows or hides the IATA and B2BCommission fields.
 */

function toggleDisplay() {
    const iata = document.getElementById("iata");
    const commission = document.getElementById("b2b_commission");
    const accountbase = document.getElementById("account_base_type");

    if(accountbase.value === "A") {
        const iata_parent = iata.parentElement.parentElement;
        Array.from(iata_parent.children).forEach(function(child) {
            child.style.display = 'block';
        });
        const commission_parent = commission.parentElement.parentElement;
        Array.from(commission_parent.children).forEach(function(child) {
            child.style.display = 'block';
        });
    }
    else {
        const iata_parent = iata.parentElement.parentElement;
        Array.from(iata_parent.children).forEach(function(child) {
            child.style.display = 'none';
        });
        const commission_parent = commission.parentElement.parentElement;
        Array.from(commission_parent.children).forEach(function(child) {
            child.style.display = 'none';
        });
    }

    accountbase.addEventListener("change", function() {
       if(this.value === "A") {
           iata.value = '';
           commission.value = '';
           const iata_parent = iata.parentElement.parentElement;
           Array.from(iata_parent.children).forEach(function(child) {
               child.style.display = 'block';
           });
           const commission_parent = commission.parentElement.parentElement;
           Array.from(commission_parent.children).forEach(function(child) {
               child.style.display = 'block';
           });
       }
       else {
           const iata_parent = iata.parentElement.parentElement;
           Array.from(iata_parent.children).forEach(function(child) {
               child.style.display = 'none';
           });
           const commission_parent = commission.parentElement.parentElement;
           Array.from(commission_parent.children).forEach(function(child) {
               child.style.display = 'none';
           });
       }
    });
}

if(document.readyState !== 'loading') {
    loadNextB2BAccountNo();
    toggleDisplay();
}
else {
    document.addEventListener('DOMContentLoaded', function () {
        loadNextB2BAccountNo();
        toggleDisplay();
    });
}
