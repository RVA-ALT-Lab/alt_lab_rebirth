jQuery( document ).ready(function() {
    jQuery("#workshop-to-event").click(function(){  
    console.log('functioning');
    var data = {
      action: 'make_workshop_to_event',
      title: 'passed value'
    };
    jQuery.post(ajaxurl, data, function(response) {
            alert(ajaxurl);
        })
    });
});    

//console.log('really I exist');



/*

IF I GO BACK TO DOING THIS VIA THE API INSTEAD

var id = getUrlParameter('parent');
console.log(id);
//get workshop by id http://192.168.33.10/wordpress/altlab/wp-json/wp/v2/workshop?include=119



//via https://stackoverflow.com/questions/19491336/get-url-parameter-jquery-or-how-to-get-query-string-values-in-js
function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

*/