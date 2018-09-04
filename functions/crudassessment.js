$(document).ready(function(){
    showPatient();
    //add dispatch
    $(document).on('click', '.add_assessment', function(){
        if ($('#time').val()=="" || $('#loc').val()=="" || $('#bp').val()=="" || $('#sa').val()=="" || $('#pr').val()=="" || $('#rr').val()=="" || $('#temp').val()=="" || $('#rbs').val()=="" || $('#pupils').val()=="" || $('#skin').val()=="" || $('#allergy').val()=="" || $('#medications').val()=="" || $('#phistory').val()=="" || $('#last_oral_intake').val()=="" || $('#events_leading_to').val()=="" || $('#notes').val()=="" || $('#eye').val()=="" || $('#verbal').val()=="" || $('#motor').val()=="" || $('#patient_disposition').val()=="" || $('#interventions').val()=="" || $('#priority_level').val()==""|| $('#chief_complaints').val()=="" || $('#subjective_assessment').val()=="" || $('#objective_assessment').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('Input all required fields!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $patient_id=$('.add_assessment').val();
            //vital signs
            $time=$('#tim').val();
            $loc=$('#loc').val();
            $bp=$('#bp').val();
            $sa=$('#sa').val();
            $pr=$('#pr').val();
            $rr=$('#rr').val();
            $temp=$('#temp').val();
            $rbs=$('#rbs').val();
            $pupils=$('#pupils').val();
            $skin=$('#skin').val();

            //past medical history
            $allergy=$('#allergy').val();
            $medications=$('#medications').val();
            $phistory=$('#phistory').val();
            $last_oral_intake=$('#last_oral_intake').val();
            $events_leading_to=$('#events_leading_to').val();
            $notes=$('#notes').val();

            //glassgow coma scale
            $eye=$('#eye').val();
            $verbal=$('#verbal').val();
            $motor=$('#motor').val();

            //incident / patient disposition
            $patient_disposition=$('#patient_disposition').val();

            //interventions
            $interventions=$('#interventions').val();

            //overall assessment
            $priority_level=$('#priority_level').val();
            $chief_complaints=$('#chief_complaints').val();
            $subjective_assessment=$('#subjective_assessment').val();
            $objective_assessment=$('#objective_assessment').val();

            //dropdown 
            $ettubesize=$('#ettubesize').val();
            $level=$('#level').val();
            $at=$('#at').val();
            $via=$('#via').val();
            $size=$('#size').val();
            $method=$('#method').val();
            $cycles=$('#cycles').val();
            $time_of_arrest=$('#time_of_arrest').val();
            $cardioversion=$('#cardioversion').val();
            $admin=$('#admin').val();
            $fluid=$('#fluid').val();
            $gauge=$('#gauge').val();
            $hemorrhage=$('#hemorrhage').val();
            $eqts=$('#eqts').val();
            $rescue=$('#rescue').val();

            $.ajax({
                type: "POST",
                url: "action/addassessment.php",
                cache:false,
                async:false,
                data: {
                    patient_id : $patient_id,
                    
                    // vital signs
                    time : $time,
                    loc : $loc,
                    bp : $bp,
                    sa : $sa,
                    pr : $pr,
                    rr : $rr,
                    temp : $temp,
                    rbs : $rbs,
                    pupils : $pupils,
                    skin: $skin,
                    
                    //past medical history
                    allergy: $allergy,
                    medications: $medications,
                    phistory: $phistory,
                    last_oral_intake: $last_oral_intake,
                    events_leading_to: $events_leading_to,
                    notes: $notes,
                    
                    //glassgow coma scale
                    eye : $eye,
                    verbal : $verbal,
                    motor : $motor,
                    
                    // incident / patient disposition
                    patient_disposition : $patient_disposition,
                    
                    // interventions
                    interventions : $interventions,
                    
                    // overallassessment
                    priority_level : $priority_level,
                    chief_complaints : $chief_complaints,
                    subjective_assessment : $subjective_assessment,
                    objective_assessment : $objective_assessment,

                    // dropdown
                    ettubesize : $ettubesize,
                    level : $level,
                    at : $at,
                    via : $via,
                    size : $size,
                    method : $method,
                    cycles : $cycles,
                    time_of_arrest : $time_of_arrest,
                    cardioversion : $cardioversion,
                    admin : $admin,
                    fluid : $fluid,
                    gauge : $gauge,
                    hemorrhage : $hemorrhage,
                    eqts : $eqts,
                    rescue : $rescue,
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









