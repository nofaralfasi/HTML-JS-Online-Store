// Parse the URL parameter
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    console.log("results = ", results);

    if (!results) {
        $('#productDetailsPage').hide();
        return null;
    }
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

// Give the parameter a variable name
var dynamicContent = getParameterByName('pid');

$(document).ready(function () {
    console.log("dynamicContent = ", dynamicContent);
    if (dynamicContent === 'productDetailsPage') {
        console.log("if1: if (dynamicContent === 'productDetailsPage')");
        $('#wallpapersPage').show();
        $('#productDetailsPage').hide();
    }
    ///only this works
    else if (dynamicContent.startsWith('productDetailsPage')) {
        console.log("if2: else if (dynamicContent.startsWith('productDetailsPage'))");
        $('#wallpapersPage').hide();
        $('#productDetailsPage').show();
        var id = dynamicContent.substring(18, dynamicContent.length);
        setClickedProduct(id);
    } else if (dynamicContent === 'productDetailsPage0002') {
        console.log("if3: if (dynamicContent === 'productDetailsPage0002')");
        $('#wallpapersPage').hide();
        $('#productDetailsPage').show();
    }
// Check if the URL parmeter is empty or not defined, display default content
    else {
        console.log("else: ");
        $('#wallpapersPage').show();
        $('#productDetailsPage').hide();
    }
});
