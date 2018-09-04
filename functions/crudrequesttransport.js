
$(document).ready(function(){
    showRequestTransport();
    //add dispatch
    $(document).on('click', '#addnew', function(){
        if ($('#date_time').val()=="" || $('#requesting_party').val()=="" || $('#contact_no').val()=="" || $('#patient_name').val()=="" || $('#address').val()=="" || $('#age').val()=="" || $('#gender').val()=="" || $('#medical_history').val()=="" || $('#special_considerations').val()=="" || $('#froma').val()=="" || $('#toa').val()=="" || $('#fromb').val()=="" || $('#gcs').val()=="" || $('#bp').val()=="" || $('#rr').val()=="" || $('#pr').val()=="" || $('#sat').val()=="" || $('#requesting_approval').val()=="" || $('#approval').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $date_time=$('#date_time').val();
            $requesting_party=$('#requesting_party').val();
            $contact_no=$('#contact_no').val();
            $patient_name=$('#patient_name').val();
            $address=$('#address').val();
            $age=$('#age').val();
            $gender=$('#gender').val();
            $medical_history=$('#medical_history').val();
            $special_considerations=$('#special_considerations').val();
            $froma=$('#froma').val();
            $toa=$('#toa').val();
            $fromb=$('#fromb').val();
            $gcs=$('#gcs').val();
            $bp=$('#bp').val();
            $rr=$('#rr').val();
            $pr=$('#pr').val();
            $sat=$('#sat').val();
            $requesting_approval=$('#requesting_approval').val();
            $approval=$('#approval').val();


            $.ajax({
                type: "POST",
                url: "action/addrequesttransport.php",
                cache:false,
                async:false,
                data: {
                    date_time : $date_time,
                    requesting_party : $requesting_party,
                    contact_no : $contact_no,
                    patient_name : $patient_name,
                    address : $address,
                    age : $age,
                    gender : $gender,
                    medical_history : $medical_history,
                    special_considerations : $special_considerations,
                    froma : $froma,
                    toa : $toa,
                    fromb : $fromb,
                    gcs : $gcs,
                    bp : $bp,
                    rr : $rr,
                    pr : $pr,
                    sat : $sat,
                    requesting_approval : $requesting_approval,
                    approval : $approval,
                    add: 1,
                },
                success: function(){
                    $('.addrequesttransport').modal('hide');
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Request for Transport Added Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showRequestTransport();
                }
            });
            $('form').trigger('reset');
        }

    });

    //update dispatch
    $(document).on('click', '.update_request_transport', function(){
        
        if ($('.date_time').val()=="" || $('.requesting_party').val()=="" || $('.contact_no').val()=="" || $('.patient_name').val()=="" || $('.address').val()=="" || $('.age').val()=="" || $('.gender').val()=="" || $('.medical_history').val()=="" || $('.special_considerations').val()=="" || $('.froma').val()=="" || $('.toa').val()=="" || $('.fromb').val()=="" || $('.gcs').val()=="" || $('.bp').val()=="" || $('.rr').val()=="" || $('.pr').val()=="" || $('.sat').val()=="" || $('.requesting_approval').val()=="" || $('.approval').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        } else {
            $urequest_transport_id=$(this).val();
            $udate_time = $('#udate_time'+$urequest_transport_id).val();
            $urequesting_party = $('#urequesting_party'+$urequest_transport_id).val();
            $ucontact_no = $('#ucontact_no'+$urequest_transport_id).val();
            $upatient_name = $('#upatient_name'+$urequest_transport_id).val();
            $uaddress = $('#uaddress'+$urequest_transport_id).val();
            $uage = $('#uage'+$urequest_transport_id).val();
            $ugender = $('#ugender'+$urequest_transport_id).val();
            $umedical_history = $('#umedical_history'+$urequest_transport_id).val();
            $uspecial_considerations = $('#uspecial_considerations'+$urequest_transport_id).val();
            $ufroma = $('#ufroma'+$urequest_transport_id).val();
            $utoa = $('#utoa'+$urequest_transport_id).val();
            $ufromb = $('#ufromb'+$urequest_transport_id).val();
            $ugcs = $('#ugcs'+$urequest_transport_id).val();
            $ubp = $('#ubp'+$urequest_transport_id).val();
            $urr = $('#urr'+$urequest_transport_id).val();
            $upr = $('#upr'+$urequest_transport_id).val();
            $usat = $('#usat'+$urequest_transport_id).val();
            $urequesting_approval = $('#urequesting_approval'+$urequest_transport_id).val();
            $uapproval = $('#uapproval'+$urequest_transport_id).val();

            $.ajax({
                type: "POST",
                url: "action/editrequesttransport.php",
                data: {
                    request_transport_id: $urequest_transport_id,
                    date_time : $udate_time,
                    requesting_party : $urequesting_party,
                    contact_no : $ucontact_no,
                    patient_name : $upatient_name,
                    address : $uaddress,
                    age : $uage,
                    gender : $ugender,
                    medical_history : $umedical_history,
                    special_considerations : $uspecial_considerations,
                    froma : $ufroma,
                    toa : $utoa,
                    fromb : $ufromb,
                    gcs : $ugcs,
                    bp : $ubp,
                    rr : $urr,
                    pr : $upr,
                    sat : $usat,
                    requesting_approval : $urequesting_approval,
                    approval : $uapproval,
                    edit: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Request for Transport Edited Successfully');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    setTimeout(function() {
                        window.location.href = 'requesttransport.php'; 
                    }, 2000);
                    
                }
            });
        }
    });

});



//show dispatch
function showRequestTransport(){
    $.ajax({
        url: 'tables/requesttransport.php',
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








