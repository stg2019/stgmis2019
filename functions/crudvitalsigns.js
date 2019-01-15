$(document).ready(function(){
    showPatient();
    //add dispatch
    $(document).on('click', '.add_vital_signs', function(){
        if ($('#loc').val()=="" || $('#bp').val()=="" || $('#sa').val()=="" || $('#pr').val()=="" || $('#rr').val()=="" || $('#temp').val()=="" || $('#rbs').val()=="" || $('#pupils').val()=="" || $('#skin').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('Input all required fields!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $patient_id=$('.add_vital_signs').val();
            //vital signs
            //$time=$('#time').val();
            $loc=$('#loc').val();
            $bp=$('#bp').val();
            $sa=$('#sa').val();
            $pr=$('#pr').val();
            $rr=$('#rr').val();
            $temp=$('#temp').val();
            $tempdot=$('#tempdot').val();
            $rbs=$('#rbs').val();
            $pupils=$('#pupils').val();
            $skin=$('#skin').val();

            $.ajax({
                type: "POST",
                url: "action/addvitalsigns.php",
                cache:false,
                async:false,
                data: {
                    patient_id : $patient_id,

                    // vital signs
                    //time : $time,
                    loc : $loc,
                    bp : $bp,
                    sa : $sa,
                    pr : $pr,
                    rr : $rr,
                    temp : $temp,
                    tempdot : $tempdot,
                    rbs : $rbs,
                    pupils : $pupils,
                    skin: $skin,
                    add: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').text('Vital Signs Added Successfully!');
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









