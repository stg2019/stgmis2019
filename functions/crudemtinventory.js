
$(document).ready(function(){
    showInventory();
    showRequest();
    //add stocks


    $(document).on('click', '#addnew', function(){
        if ($('#medical_supply_name').val()=="" || $('#requested_quantity').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $medical_supply_name=$('#medical_supply_name').val();
            $requested_quantity=$('#requested_quantity').val();

            if(confirm('Are you sure you want to request this medical supply stocks?')){
                $.ajax({
                    type: "POST",
                    url: "action/requestsupplies.php",
                    cache:false,
                    async:false,
                    data: {
                        medical_supply_name : $medical_supply_name,
                        requested_quantity : $requested_quantity,
                        add: 1,
                    },
                    success: function(){
                        $('.requestsupplies').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Medical Supply Stocks Requested Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showInventory();
                        showRequest();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });


});



//show inventory
function showInventory(){
    $.ajax({
        url: 'tables/emtinventory.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#inventoryTable').html(response);
            var table = $('#inventorytable').DataTable();
        }
    });
}

function showRequest(){
    $.ajax({
        url: 'tables/requestsupplies.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#requestTable').html(response);
            var table = $('#requesttable').DataTable();
        }
    });
}









