
$(document).ready(function(){

    showAmbulance();
    //add ambulance
    $(document).on('click', '#addnew', function(){
        if ($('#plate_no').val()=="" || $('#vehicle_name').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $plate_no=$('#plate_no').val();
            $vehicle_name=$('#vehicle_name').val();

            if(confirm('Are you sure you want to add this ambulance?')){
                $.ajax({
                    type: "POST",
                    url: "../action/addambulance.php",
                    cache:false,
                    async:false,
                    data: {
                        plate_no : $plate_no,
                        vehicle_name : $vehicle_name,
                        add: 1,
                    },
                    success: function(){
                        $('.newambulance').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Ambulance Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showAmbulance();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });


    //update ambulance
    $(document).on('click', '.update_ambulance', function(){
        $ambulance_id=$(this).val();
        $plate_no = $('#plate_no'+$ambulance_id).val();
        $vehicle_name = $('#vehicle_name'+$ambulance_id).val();
        $.ajax({
            type: "POST",
            url: "../action/editambulance.php",
            data: {
                ambulance_id: $ambulance_id,
                plate_no : $plate_no,
                vehicle_name : $vehicle_name,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Ambulance Information Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'ambulance.php'; 
                }, 2000);
            }
        });
    });
});

// show ambulance EMT
function showAmbulanceEMT(){
    $.ajax({
        url: 'tables/ambulance.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#ambulanceTable').html(response);
            var table = $('#ambulancetable').DataTable();
        }
    });
}

// show ambulance
function showAmbulance(){
    $.ajax({
        url: 'tables/ambulance.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#ambulanceTable').html(response);
            var table = $('#ambulancetable').DataTable();
        }
    });
}









