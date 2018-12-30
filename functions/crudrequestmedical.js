
$(document).ready(function(){
    showRequestMedical();
    
    $("#uapproved_quantity").keyup(function(){
        $umedical_supply_request_id=$(this).val();

        var medical_supply_name = $("#medical_supply_name").val();
        var approved_quantity = $("#uapproved_quantity").val().trim();
        if(approved_quantity != ''){
            $("#quantity_response").show();

            $.ajax({
                url: '../action/checkrequest.php',
                type: 'post',
                data: {approved_quantity:approved_quantity,medical_supply_name : medical_supply_name},
                success: function(response){
                    if(response > 0){
                        $("#quantity_response").html("<span class='label label-danger'>Approved Quantity cannot be more than or equal to the running balance</span>");
                        $(".approve_request").attr("disabled", true); 

                    }else{
                        $("#quantity_response").html("");
                        $(".approve_request").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#quantity_response").hide();
        }
    });


    //Approve Request
    $(document).on('click', '.approve_request', function(){
        if ($('#uapproved_quantity').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> Please fill Approved Quantity!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $umedical_supply_request_id=$(this).val();
            $umedical_supply_name = $('#umedical_supply_name'+$umedical_supply_request_id).val();
            $urequested_quantity = $('#urequested_quantity'+$umedical_supply_request_id).val();
            $udate_requested = $('#udate_requested'+$umedical_supply_request_id).val();
            $uapproved_quantity=$('#uapproved_quantity').val();

            if(confirm('Are you sure you want to approve this request?')){
                $.ajax({
                    type: "POST",
                    url: "../action/approverequest.php",
                    data: {
                        medical_supply_request_id: $umedical_supply_request_id,
                        medical_supply_name : $umedical_supply_name,
                        requested_quantity : $urequested_quantity,
                        date_requested : $udate_requested,
                        approved_quantity : $uapproved_quantity,
                        edit: 1,
                    },
                    success: function(){
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Medical Supply Request Approve Successfully');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function() {
                            window.location.href = 'medicalsuppliesrequest.php'; 
                        }, 2000);
                    }
                });

            }
            $('form').trigger('reset');
        }

    });

});



//show Medical Request
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









