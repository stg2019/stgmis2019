
$(document).ready(function(){
    notificationNewUser();
    notificationLocateUser();
});

function notificationNewUser(){
    $.ajax({
        url: '../notifications/newusers.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('.notificationnewuser').html(response);
        }
    });
}

function notificationLocateUser(){
    $.ajax({
        url: '../notifications/locateuser.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('.notificationLocateUser').html(response);
        }
    });
}








