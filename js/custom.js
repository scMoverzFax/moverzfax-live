

// After click reply button input and button show
function review_reply(id){
    $('#reply_input' + id).show();
    $('#share_reply' + id).show();
}

// Share reply to user.
function reply_customer(id){
    var input = $('#reply_input' + id).val();

    $.ajax({
        type : "POST",
        url : "../model/review_reply_model.php",
        data : { mover_reply : input , id : id }, 

        success: function(result) {
            $('#reply_div'+id).hide();
            $('#reply_by'+id).show();
            $('#space'+id).show();
            $('#user_reply'+id).text(result);
        }   
    });
}

// admin customer transaction

function customer_transaction(){
    var value = $('#cs_search_transaction').val();
    $.ajax({
        type : "POST",
        url : "../admin/admin_model/transaction_model.php",
        data : { type : "customer" , value : value },

        success: function(result) {
           $('#cs_search_transaction_table').html(result);
        }   
    });
}

// Admin Mover transaction

function mover_transaction(){
    var value = $('#mv_search_transaction').val();
    $.ajax({
        type : "POST",
        url : "../admin/admin_model/transaction_model.php",
        data : { type : "mover" , value : value },

        success: function(result) {
           $('#mv_search_transaction_table').html(result);
        }   
    });
}

// Admin Customer User

function customer_user(){
    var value = $('#cs_user_search').val();
    $.ajax({
        type : "POST",
        url : "../admin/admin_model/ajax_user_model.php",
        data : { type : "cs_user" , value : value },

        success: function(result) {
           $('#cs_user_search_table').html(result);
        }   
    });
}

// Admin Mover User

function mover_user(){
    var value = $('#mv_user_search').val();
    $.ajax({
        type : "POST",
        url : "../admin/admin_model/ajax_user_model.php",
        data : { type : "mv_user" , value : value },

        success: function(result) {
           $('#mv_user_search_table').html(result);
        }   
    });
}
