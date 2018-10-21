
$(document).ready(function(){
    showRequestMedical();
    //add stocks

    $(document).on('click', '.approve_request', function(){
        $umedical_supply_request_id=$(this).val();
        $umedical_supply_name = $('#umedical_supply_name'+$umedical_supply_request_id).val();
        $urequested_quantity = $('#urequested_quantity'+$umedical_supply_request_id).val();
        $udate_requested = $('#udate_requested'+$umedical_supply_request_id).val();
        $.ajax({
            type: "POST",
            url: "../action/approverequest.php",
            data: {
                medical_supply_request_id: $umedical_supply_request_id,
                medical_supply_name : $umedical_supply_name,
                requested_quantity : $urequested_quantity,
                date_requested : $udate_requested,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Medical Supply Request Approve Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'medicalsuppliesrequest.php'; 
                }, 2000);
            }
        });
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








