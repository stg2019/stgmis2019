
$(document).ready(function(){
    notificationNewUser();
    notificationBadgeUser();
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

function notificationBadgeUser(){
    $.ajax({
        url: '../notifications/badgeuser.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('.badgeuser').html(response);
        }
    });
}








