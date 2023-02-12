// State
function get_state(value) {
    var counrty = $('#' +value+ '_country').val();
    $.ajax({
        type: "POST",
        url: "../model/state.php",
        data: {
            country_code: counrty
        },
        success: function(result) {
            $('#' +value+ '_state').html(result);
        }
    });
}
get_state("origin");
get_state("destination");

//City
function get_city(value) {
    var state = $('#'+value+'_state').val();
    $.ajax({
        type: "POST",
        url: "../model/city.php",
        data: {
            state_code: state
        },
        success: function(result) {
            $('#'+ value+ '_city').html(result);
        }
    });
}
get_city("origin");
get_city("destination");

