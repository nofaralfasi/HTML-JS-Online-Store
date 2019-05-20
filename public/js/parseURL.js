// Parse the URL parameter
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// Give the parameter a variable name
var dynamicContent = getParameterByName('pid');

$(document).ready(function () {

// Check if the URL parameter is apples
    if (dynamicContent == 'apples') {
        $('#apples').show();
    }
// Check if the URL parameter is oranges
    else if (dynamicContent == 'oranges') {
        $('#oranges').show();
    }
// Check if the URL parameter is bananas
    else if (dynamicContent == 'bananas') {
        $('#bananas').show();
    }
// Check if the URL parmeter is empty or not defined, display default content
    else {
        $('#default-content').show();
    }
});
