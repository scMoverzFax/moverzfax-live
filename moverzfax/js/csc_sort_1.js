
// Country select
function get_country_1() {
    var counrty_1 = $('#country_1');
    $.ajax({
        type: "POST",
        url: "../model/country.php",
        success: function (result) {
            counrty_1.html(result);
        }
    });
}

function get_state_1() {
    var state_1 = $('#state_1');
    var value = $('#country_1').val();
    $.ajax({
        type: "POST",
        url: "../model/state.php",
        data: {
            country_id: value
        },
        success: function (result) {
            state_1.html(result);
        }
    });
}

function get_city_1() {
    var city_1 = $('#city_1');
    var value = $('#state_1').val();
    $.ajax({
        type: "POST",
        url: "../model/city.php",
        data: {
            state_code: value
        },
        success: function (result) {
            city_1.html(result);
        }
    });
}

setTimeout(get_country_1, 100);
setTimeout(get_state_1, 200);
setTimeout(get_city_1, 300);

function reset_csc() {
    setTimeout(get_country_1, 100);
    setTimeout(get_state_1, 200);
    setTimeout(get_city_1, 300);
}