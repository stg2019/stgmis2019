
$(document).ready(function(){
    showMedicalSupplies();
    //add call log
    $(document).on('click', '#addnew', function(){
        if ($('#medical_supply_name').val()=="" || $('#unit_of_issue').val()=="" || $('#item_code').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $admin_id = $('#admin_id').val();
            $medical_supply_name=$('#medical_supply_name').val();
            $unit_of_issue=$('#unit_of_issue').val();
            $item_code=$('#item_code').val();

            if(confirm('Are you sure you want to add this new medical supply?')){
                $.ajax({
                    type: "POST",
                    url: "../action/addmedicalsupply.php",
                    cache:false,
                    async:false,
                    data: {
                        admin_id : $admin_id,
                        medical_supply_name : $medical_supply_name,
                        unit_of_issue : $unit_of_issue,
                        item_code : $item_code,
                        add: 1,
                    },
                    success: function(){
                        $('.addmedicalsupply').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Medical Supply Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showMedicalSupplies();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });

    //update ambulance
    $(document).on('click', '.update_medical_supply', function(){
        $stock_id=$(this).val();
        $item_code = $('#item_code'+$stock_id).val();
        $medical_supply_name = $('#medical_supply_name'+$stock_id).val();
        $unit_of_issue = $('#unit_of_issue'+$stock_id).val();
        $.ajax({
            type: "POST",
            url: "../action/editmedicalsupply.php",
            data: {
                stock_id: $stock_id,
                item_code : $item_code,
                medical_supply_name : $medical_supply_name,
                unit_of_issue : $unit_of_issue,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Medical Supply Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'medicalsupplies.php'; 
                }, 2000);
            }
        });
    });

});



//show medical supplies
function showMedicalSupplies(){
    $.ajax({
        url: 'tables/medicalsupplies.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#medicalsupplyTable').html(response);
            var table = $('#medicalsupplytable').DataTable();
        }
    });
}








