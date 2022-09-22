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
            document.getElementById("b2baccountno").innerText = this.responseText;
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
    const accountbase = document.getElementById("accountbasetype");

    if(accountbase.value === "T") {
        iata.value = '';
        commission.value = '';
        iata.parentElement.parentElement.style.display = 'block';
        commission.parentElement.parentElement.style.display = 'block';
    }
    else {
        iata.parentElement.parentElement.style.display = 'none';
        commission.parentElement.parentElement.style.display = 'none';
    }

    accountbase.addEventListener("change", function() {
       if(this.value === "T") {
           iata.value = '';
           commission.value = '';
           iata.parentElement.parentElement.style.display = 'block';
           commission.parentElement.parentElement.style.display = 'block';
       }
       else {
           iata.parentElement.parentElement.style.display = 'none';
           commission.parentElement.parentElement.style.display = 'none';
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
