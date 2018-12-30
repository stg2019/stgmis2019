
$(document).ready(function(){
    showDrivers();
    showAdminDrivers();
    //add driver
    $(document).on('click', '#addnew', function(){
        if ($('#driver_name').val()=="" || $('#age').val()=="" || $('#gender').val()=="" || $('#contact_number').val()=="" || $('#home_address').val()=="" || $('#duty_hours').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $driver_name=$('#driver_name').val();
            $age=$('#age').val();
            $gender=$('#gender').val();
            $contact_number=$('#contact_number').val();
            $home_address=$('#home_address').val();
            $duty_hours=$('#duty_hours').val();

            if(confirm('Are you sure you want to add this driver?')){
                $.ajax({
                    type: "POST",
                    url: "../action/adddriver.php",
                    cache:false,
                    async:false,
                    data: {
                        driver_name : $driver_name,
                        age : $age,
                        gender : $gender,
                        contact_number : $contact_number,
                        home_address : $home_address,
                        duty_hours : $duty_hours,
                        add: 1,
                    },
                    success: function(){
                        $('.newdriver').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Driver Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showAdminDrivers();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });


    //update driver
    $(document).on('click', '.update_driver', function(){
        $driver_id=$(this).val();
        $driver_name = $('#driver_name'+$driver_id).val();
        $age = $('#age'+$driver_id).val();
        $gender = $('#gender'+$driver_id).val();
        $contact_number = $('#contact_number'+$driver_id).val();
        $home_address = $('#home_address'+$driver_id).val();
        $duty_hours = $('#duty_hours'+$driver_id).val();
        $.ajax({
            type: "POST",
            url: "../action/editdriver.php",
            data: {
                driver_id: $driver_id,
                driver_name : $driver_name,
                age : $age,
                gender : $gender,
                contact_number : $contact_number,
                home_address : $home_address,
                duty_hours : $duty_hours,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Driver Information Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'driver.php'; 
                }, 2000);
            }
        });
    });
});



//show masterfile driver EMT
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

function showAdminDrivers(){
    $.ajax({
        url: 'tables/driver.php',
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








