$(document).ready(function(){
    showPatient();
    //add dispatch
    $(document).on('click', '.add_assessment', function(){
        if ($('#eye').val()=="" || $('#verbal').val()=="" || $('#motor').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('Input all required fields!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $patient_id=$('.add_assessment').val();

            //glassgow coma scale
            $eye=$('#eye').val();
            $verbal=$('#verbal').val();
            $motor=$('#motor').val();

            $.ajax({
                type: "POST",
                url: "action/addglassgow.php",
                cache:false,
                async:false,
                data: {
                    patient_id : $patient_id,

                    //glassgow coma scale
                    eye : $eye,
                    verbal : $verbal,
                    motor : $motor,
                    add: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Patient Assessment Added Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    setTimeout(function(){
                        window.history.back();
                    }, 2500);
                    showDispatch();
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









