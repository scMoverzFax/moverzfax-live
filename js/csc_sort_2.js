
// Country select
function get_country_2() {
    var counrty_2 = $('#country_2');
    $.ajax({
        type: "POST",
        url: "../model/country.php",
        success: function (result) {
            counrty_2.html(result);
        }
    });
}

function get_state_2() {
    var state_2 = $('#state_2');
    var value = $('#country_2').val();
    $.ajax({
        type: "POST",
        url: "../model/state.php",
        data: {
            country_id: value
        },
        success: function (result) {
            state_2.html(result);
        }
    });
}

function get_city_2() {
    var city_2 = $('#city_2');
    var value = $('#state_2').val();
    $.ajax({
        type: "POST",
        url: "../model/city.php",
        data: {
            state_code: value
        },
        success: function (result) {
            city_2.html(result);
        }
    });
}

setTimeout(get_country_2, 200);
setTimeout(get_state_2, 200);
setTimeout(get_city_2, 300);

function reset_scs_2() {
    setTimeout(get_country_2, 200);
    setTimeout(get_state_2, 200);
    setTimeout(get_city_2, 300);
}