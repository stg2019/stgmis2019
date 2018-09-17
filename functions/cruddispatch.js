
$(document).ready(function(){
    showDispatch();
    //add dispatch
    $(document).on('click', '#addnew', function(){
        if ($('#service_no').val()=="" || $('#date_time_call').val()=="" || $('#ambulance').val()=="" || $('#dispatched_for').val()=="" || $('#call_location').val()=="" || $('#moi_noi').val()=="" || $('#patients_on_scene').val()=="" || $('#on_board_tl').val()=="" || $('#ems').val()=="" || $('#driver').val()=="" || $('#care_in_progress').val()=="" || $('#mass_casualty').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $service_no=$('#service_no').val();
            $date_time_call=$('#date_time_call').val();
            $ambulance=$('#ambulance').val();
            $dispatched_for=$('#dispatched_for').val();
            $call_location=$('#call_location').val();
            $moi_noi=$('#moi_noi').val();
            $patients_on_scene=$('#patients_on_scene').val();
            $on_board_tl=$('#on_board_tl').val();
            $ems=$('#ems').val();
            $driver=$('#driver').val();
            $care_in_progress=$('#care_in_progress').val();
            $mass_casualty=$('#mass_casualty').val();

            if(confirm('Are you sure you want to add this dispatchment record?')){
                $.ajax({
                    type: "POST",
                    url: "action/adddispatch.php",
                    cache:false,
                    async:false,
                    data: {
                        service_no : $service_no,
                        date_time_call : $date_time_call,
                        ambulance : $ambulance,
                        dispatched_for : $dispatched_for,
                        call_location : $call_location,
                        moi_noi : $moi_noi,
                        patients_on_scene : $patients_on_scene,
                        on_board_tl : $on_board_tl,
                        ems : $ems,
                        driver : $driver,
                        care_in_progress : $care_in_progress,
                        mass_casualty : $mass_casualty,
                        add: 1,
                    },
                    success: function(){
                        $('.adddispatchment').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Dispatchment Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showDispatch();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });



    //update dispatch
    $(document).on('click', '.update_dispatch', function(){
        $udispatch_id=$(this).val();
        $uservice_no = $('#uservice_no'+$udispatch_id).val();
        $udate_time_call = $('#udate_time_call'+$udispatch_id).val();
        $uambulance = $('#uambulance'+$udispatch_id).val();
        $udispatched_for = $('#udispatched_for'+$udispatch_id).val();
        $ucall_location = $('#ucall_location'+$udispatch_id).val();
        $umoi_noi = $('#umoi_noi'+$udispatch_id).val();
        $upatients_on_scene = $('#upatients_on_scene'+$udispatch_id).val();
        $uon_board_tl = $('#uon_board_tl'+$udispatch_id).val();
        $uems = $('#uems'+$udispatch_id).val();
        $udriver = $('#udriver'+$udispatch_id).val();
        $ucare_in_progress = $('#ucare_in_progress'+$udispatch_id).val();
        $umass_casualty = $('#umass_casualty'+$udispatch_id).val();
        $.ajax({
            type: "POST",
            url: "action/editdispatch.php",
            data: {
                dispatch_id: $udispatch_id,
                service_no : $uservice_no,
                date_time_call : $udate_time_call,
                ambulance : $uambulance,
                dispatched_for : $udispatched_for,
                call_location : $ucall_location,
                moi_noi : $umoi_noi,
                patients_on_scene : $upatients_on_scene,
                on_board_tl : $uon_board_tl,
                ems : $uems,
                driver : $udriver,
                care_in_progress : $ucare_in_progress,
                mass_casualty : $umass_casualty,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('Dispatch Record Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                setTimeout(function() {
                    window.location.href = 'dispatchment.php'; 
                }, 2000);
            }
        });
    });

    //delete dispatch
    //    $(document).on('click', '#delete_dispatch', function(){
    //        $dispatch_id=$(this).val();
    //  $('#delete_dispatch'+$dispatch_id).modal('hide');
    //    $('body').removeClass('modal-open');
    //      $('.modal-backdrop').remove();
    //        $.ajax({
    //    type: "POST",
    //   url: "action/deletedispatch.php",
    //    data: {
    //      dispatch_id: $dispatch_id,
    //        del: 1,
    //    },
    //    success: function(){
    //        $('.delete_dispatch').modal('hide');
    //        $('#alert').slideDown();
    //    $('#alerttext').text('Dispatch Record Deleted Successfully');
    //      setTimeout(function() {
    //            $('#alert').fadeOut('slow');
    //        }, 1500);
    //          showDispatch();
    //        }
    //      });
    //    });

});



//show dispatch
function showDispatch(){
    $.ajax({
        url: 'tables/dispatchlist.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#dispatchTable').html(response);
            var table = $('#dispatchtable').DataTable();
        }
    });
}








