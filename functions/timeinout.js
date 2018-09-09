
$(document).ready(function(){

    $.ajax({
        url: 'action/timeinout.php',
        type: 'post',
        success: function(response){
            if(response > 0){
                $("#timeinout").attr("disabled", false); 

            }else{
                $("#timeinout").attr("disabled", true); 
            }
        }
    });

    $(document).on('click', '#timeinout', function(){
        if ($('#time').val()=="" || $('#emt_id_number').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Enter ID Number!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $emt_id_number=$('#emt_id_number').val();

            $.ajax({
                type: "POST",
                url: "action/timeinout.php",
                cache:false,
                async:false,
                data: {
                    emt_id_number : $emt_id_number,
                    add: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Success!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                }
            });
            $('form').trigger('reset');
        }

    });


});











