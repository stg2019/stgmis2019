
$(document).ready(function(){
    showRefusalTreatment();

    $(document).on('click', '#addnew', function(){
        if ($('#signed').val()=="" || $('#witness1').val()=="" || $('#witness2').val()=="" || $('#date_incident').val()=="" || $('#statements').val()=="" || $('#attachment').val()=="" || $('#prepared_by').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $signed=$('#signed').val();
            $witness1=$('#witness1').val();
            $witness2=$('#witness2').val();
            $date_incident=$('#date_incident').val();
            $statements=$('#statements').val();
            $attachment=$('#attachment').val();
            $prepared_by=$('#prepared_by').val();


            $.ajax({
                type: "POST",
                url: "action/addrefusaltreatment.php",
                cache:false,
                async:false,
                data: {
                    signed : $signed,
                    witness1 : $witness1,
                    witness2 : $witness2,
                    date_incident : $date_incident,
                    statements : $statements,
                    attachment : $attachment,
                    prepared_by : $prepared_by,
                    add: 1,
                },
                success: function(){
                    $('.addrefusal').modal('hide');
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Refusal for Treatment Added Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showRefusalTreatment();
                }
            });
            $('form').trigger('reset');
        }

    });

    $(document).on('click', '.update_refusal_treatment', function(){
        $urefusal_treatment_id=$(this).val();
        $usigned = $('#usigned'+$urefusal_treatment_id).val();
        $uwitness1 = $('#uwitness1'+$urefusal_treatment_id).val();
        $uwitness2 = $('#uwitness2'+$urefusal_treatment_id).val();
        $udate_incident = $('#udate_incident'+$urefusal_treatment_id).val();
        $ustatements = $('#ustatements'+$urefusal_treatment_id).val();
        $uattachment = $('#uattachment'+$urefusal_treatment_id).val();
        $uprepared_by = $('#uprepared_by'+$urefusal_treatment_id).val();
        $.ajax({
            type: "POST",
            url: "action/editrefusaltreatment.php",
            data: {
                refusal_treatment_id: $urefusal_treatment_id,
                signed : $usigned,
                witness1 : $uwitness1,
                witness2 : $uwitness2,
                date_incident : $udate_incident,
                statements : $ustatements,
                attachment : $uattachment,
                prepared_by : $uprepared_by,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Refusal for Treatment Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'refusaltreatment.php'; 
                }, 2000);
            }
        });
    });

});



//show dispatch
function showRefusalTreatment(){
    $.ajax({
        url: 'tables/refusaltreatment.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#refusaltreatmentTable').html(response);
            var table = $('#refusaltreatmenttable').DataTable();
        }
    });
}








