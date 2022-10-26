// Login page label And input

var valid_user = false;
var valid_pass = false;
function select_category(){
    var category = $('#user_type').val();
    if(category == "customer"){
        $('#username_label').text("USERNAME");
        $('#username_input').html('<input class="form-control mb-4" id="user_id" type="text" placeholder="Enter USERNAME" id="fname" name="email" onkeyup="validUser()">');
    }
    else if(category == "mover") {
        $('#username_label').text("#USDOT");
        $('#username_input').html('<input class="form-control mb-4" id="user_id" placeholder="Enter #USDOT" id="fname" name="email" onkeyup="validUser()">');
    }
    else if(category == "admin") {
        $('#username_label').text("USERNAME");
        $('#username_input').html('<input class="form-control mb-4" id="user_id" type="text" placeholder="Enter USERNAME" id="fname" name="email" onkeyup="validUser()">');
    }
    validUser();
    test();

}

function validUser(){
    var category = $('#user_type').val();
    var email = $('#user_id').val();
    if(category == "customer" || category == "admin"){
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email) || email == undefined || email == "") {
            valid_user = false;
        }else{
            valid_user = true;
        }
    }
    else if(category == "mover" ) {
        if(isNaN(email) || email == undefined || email == "") {
            valid_user = false;
        }else{
            valid_user = true;
        }
    }
    test();
}
function validPass(){
    var password = $('#password').val();
    if(password.length < 8)
        valid_pass = false;
    else
        valid_pass = true;
    test();
}

function test(){
    console.log(valid_user);
    if(valid_user && valid_pass)
        $('#sub_btn').prop('disabled', false);
    else
        $('#sub_btn').prop('disabled', true);
}
validUser();
test();
