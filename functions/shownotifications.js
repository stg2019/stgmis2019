
$(document).ready(function(){
    showNewUser();
});

//show dispatch
function showNewUser(){
    $.ajax({
        url: '../notifications/newusers.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('.newuser').html(response);
        }
    });
}








