
$(document).ready(function(){
    showMedicalSupplies();
    //add call log
    $(document).on('click', '#addnew', function(){
        if ($('#medical_supply_name').val()=="" || $('#medical_supply_description').val()=="" || $('#supplier').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $admin_id = $('#admin_id').val();
            $medical_supply_name=$('#medical_supply_name').val();
            $medical_supply_description=$('#medical_supply_description').val();
            $supplier=$('#supplier').val();

            if(confirm('Are you sure you want to add this new medical supply?')){
                $.ajax({
                    type: "POST",
                    url: "../action/addmedicalsupply.php",
                    cache:false,
                    async:false,
                    data: {
                        admin_id : $admin_id,
                        medical_supply_name : $medical_supply_name,
                        medical_supply_description : $medical_supply_description,
                        supplier : $supplier,
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








