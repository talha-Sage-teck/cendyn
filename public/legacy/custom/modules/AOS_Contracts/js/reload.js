
$(document).ready(() => {
    $('#contract_type').on('change', function () {
        SUGAR.ajaxUI.showLoadingPanel();

        let type = $('#contract_type').val();
        reloadWithParameter('contract_type_cc', type);
    })
});

function reloadWithParameter(paramName, paramValue) {
    // Create a URL object from the current location
    var currentUrl = new URL(window.location.href);

    // Use URLSearchParams to work with the query string
    var searchParams = new URLSearchParams(currentUrl.search);

    // Check if the parameter exists and remove it
    if (searchParams.has(paramName)) {
        searchParams.delete(paramName);
    }

    // Add the new parameter value
    searchParams.set(paramName, paramValue);

    // Set the search property of the URL object to the updated search parameters
    currentUrl.search = searchParams.toString();

    debugger;
    removeBeforeUnloadWarning();

    // Navigate to the new URL
    window.location.href = currentUrl.toString();
}
function removeBeforeUnloadWarning() {
    window.onbeforeunload = null;

    // window.addEventListener('beforeunload', function (event) {
    //     event.stopImmediatePropagation();
    //     event.preventDefault();
    //     event.returnValue = '';
    // });
}

// This is the function you would have added somewhere in your code
// that asks the user if they are sure they want to leave the page.
function beforeUnloadListener(event) {
    // your logic here, for example:
    event.preventDefault();
    event.returnValue = '';
}
