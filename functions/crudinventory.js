
$(document).ready(function(){
    showInventory();
    showApproved();
    //add stocks
    $(document).on('click', '#addnew', function(){
        if ($('#medical_supply_name').val()=="" || $('#number_of_stocks').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $medical_supply_name=$('#medical_supply_name').val();
            $number_of_stocks=$('#number_of_stocks').val();

            if(confirm('Are you sure you want to add this medical supply stocks?')){
                $.ajax({
                    type: "POST",
                    url: "../action/addstocks.php",
                    cache:false,
                    async:false,
                    data: {
                        medical_supply_name : $medical_supply_name,
                        number_of_stocks : $number_of_stocks,
                        add: 1,
                    },
                    success: function(){
                        $('.addstocks').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Medical Supply Stocks Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showInventory();
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
        url: 'tables/inventory.php',
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


function showApproved(){
    $.ajax({
        url: 'tables/approvedrequest.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#approvedTable').html(response);
            var table = $('#approvedtable').DataTable();
        }
    });
}








