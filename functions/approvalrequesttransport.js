
$(document).ready(function(){
    showRequestTransport();


    //approve request
    $(document).on('click', '.approve_request', function(){
        $request_transport_id=$(this).val();

        if(confirm('Are you sure you want to approve this Request of Transport?')){
            $.ajax({
                type: "POST",
                url: "../action/approverequesttransport.php",
                data: {
                    request_transport_id: $request_transport_id,
                    edit: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Request for Transport Approved Successfully');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showRequestTransport();
                }
            });
        }
    });
});



//show masterfile driver EMT
function showRequestTransport(){
    $.ajax({
        url: 'tables/requesttransportapproval.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#requesttransportTable').html(response);
            var table = $('#requesttransporttable').DataTable();
        }
    });
}








