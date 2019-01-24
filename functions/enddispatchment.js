$(document).ready(function(){

    //end dispatchment
    $(document).on('click', '#enddispatchment', function(){
        $dispatch_id=$('#enddispatchment').val();
        $ambulance=$('#ambulance').val();
        $driver=$('#driver').val();
        $.ajax({
            type: "POST",
            url: "action/enddispatchment.php",
            cache:false,
            async:false,
            data: {
                ambulance : $ambulance,
                driver : $driver,
                dispatch_id : $dispatch_id,
                add: 1,
            },
            success: function(){
                $('#alerts').slideDown();
                $('#alerttexts').val();
                setTimeout(function() {
                    $('#alerts').fadeOut('slow');
                }, 3500);
                setTimeout(function() {
                    window.location.href = 'dashboard.php'; 
                }, 4000);
            }
        });
    });

});









