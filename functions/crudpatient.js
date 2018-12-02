$(document).ready(function(){
    showPatient();
    showItemUsed();
    //add dispatch
    $(document).on('click', '#addnew', function(){
        if ($('#patient_name').val()=="" || $('#age').val()=="" || $('#gender').val()=="" || $('#date_of_birth').val()=="" || $('#contact_no').val()=="" || $('#home_address').val()=="" || $('#next_to_kin').val()=="" || $('#relationship').val()=="" || $('#directives').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $dispatch_id=$('#addnew').val();
            $patient_name=$('#patient_name').val();
            $age=$('#age').val();
            $gender=$('#gender').val();
            $date_of_birth=$('#date_of_birth').val();
            $contact_no=$('#contact_no').val();
            $home_address=$('#home_address').val();
            $next_to_kin=$('#next_to_kin').val();
            $relationship=$('#relationship').val();
            $directives=$('#directives').val();

            $.ajax({
                type: "POST",
                url: "action/addpatient.php",
                cache:false,
                async:false,
                data: {
                    patient_name : $patient_name,
                    age : $age,
                    gender : $gender,
                    date_of_birth : $date_of_birth,
                    contact_no : $contact_no,
                    home_address : $home_address,
                    next_to_kin : $next_to_kin,
                    relationship : $relationship,
                    directives : $directives,
                    dispatch_id : $dispatch_id,
                    add: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Patient Added Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    setTimeout(function(){
                        window.location.reload();
                    }, 2500);
                    showDispatch();
                }
            });
            $('form').trigger('reset');
        }

    });

    //add medical supply used
    $(document).on('click', '#additem', function(){
        if ($('#medical_supply_name').val()=="" || $('#quantity_used').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $dispatch_id=$('#additem').val();
            $medical_supply_name=$('#medical_supply_name').val();
            $quantity_used=$('#quantity_used').val();
            $.ajax({
                type: "POST",
                url: "action/additemused.php",
                cache:false,
                async:false,
                data: {
                    medical_supply_name : $medical_supply_name,
                    quantity_used : $quantity_used,
                    dispatch_id : $dispatch_id,
                    add: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Medical Supply Item Added Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showItemUsed();
                }
            });
            $('form').trigger('reset');
        }

    });

});

//show dispatch
function showPatient(){
    $dispatch_id=$('#addnew').val(); 
    $.ajax({
        url: 'tables/patientslist.php',
        type: 'POST',
        data:{
            dispatch_id : $dispatch_id,
            show: 1
        },
        success: function(response){
            $('#patientTable').html(response);

        }
    });
}

function showItemUsed(){
    $dispatch_id=$('#additem').val(); 
    $.ajax({
        url: 'tables/itemused.php',
        type: 'POST',
        data:{
            dispatch_id : $dispatch_id,
            show: 1
        },
        success: function(response){
            $('#itemTable').html(response);

        }
    });
}












