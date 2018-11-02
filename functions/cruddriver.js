
$(document).ready(function(){
    showDrivers();
    //add call log
    $(document).on('click', '#addnew', function(){
        if ($('#date_time_call').val()=="" || $('#complete_address').val()=="" || $('#emergency').val()=="" || $('#caller_name').val()=="" || $('#contact_no').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $date_time_call=$('#date_time_call').val();
            $complete_address=$('#complete_address').val();
            $emergency=$('#emergency').val();
            $caller_name=$('#caller_name').val();
            $contact_no=$('#contact_no').val();

            if(confirm('Are you sure you want to add this call log record?')){
                $.ajax({
                    type: "POST",
                    url: "action/addcalllog.php",
                    cache:false,
                    async:false,
                    data: {
                        date_time_call : $date_time_call,
                        complete_address : $complete_address,
                        emergency : $emergency,
                        caller_name : $caller_name,
                        contact_no : $contact_no,
                        add: 1,
                    },
                    success: function(){
                        $('.addcall').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Call Log Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showCalllogs();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });

    //update call log
    $(document).on('click', '.update_calllog', function(){
        $ucall_id=$(this).val();
        $udate_time_call = $('#udate_time_call'+$ucall_id).val();
        $ucomplete_address = $('#ucomplete_address'+$ucall_id).val();
        $uemergency = $('#uemergency'+$ucall_id).val();
        $ucaller_name = $('#ucaller_name'+$ucall_id).val();
        $ucontact_no = $('#ucontact_no'+$ucall_id).val();
        $.ajax({
            type: "POST",
            url: "action/editcalllog.php",
            data: {
                call_id: $ucall_id,
                date_time_call : $udate_time_call,
                complete_address : $ucomplete_address,
                emergency : $uemergency,
                caller_name : $ucaller_name,
                contact_no : $ucontact_no,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Call Log Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'calllogs.php'; 
                }, 2000);
            }
        });
    });

});



//show dispatch
function showDrivers(){
    $.ajax({
        url: 'tables/drivers.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#driverTable').html(response);
            var table = $('#drivertable').DataTable();
        }
    });
}








