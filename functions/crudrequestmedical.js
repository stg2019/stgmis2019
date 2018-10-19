
$(document).ready(function(){
    showRequestMedical();
    //add stocks

    $(document).on('click', '.approverequest', function(){
        if ($('#medical_supply_request_id').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else {
            $medical_supply_request_id=$('#medical_supply_request_id').val();
            $requested_quantity=$('#requested_quantity').val();
            $medical_supply_name=$('#medical_supply_name').val();
            $.ajax({
                type: "POST",
                url: "action/approverequest.php",
                data: {
                    medical_supply_request_id: $medical_supply_request_id,
                    requested_quantity : $requested_quantity,
                    medical_supply_name : $medical_supply_name,
                    edit: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Medical Supply Request Approved Successfully');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showRequestMedical();
                }
            });
        }
    });
});



//show inventory
function showRequestMedical(){
    $.ajax({
        url: 'tables/requestedmedicalsupplies.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#requestmedicalTable').html(response);
            var table = $('#requestmedicaltable').DataTable();
        }
    });
}








