$(document).ready(function(){
    showPatient();
    showAdminPatient();
});


//show dispatch
function showPatient(){
    $.ajax({
        url: 'tables/masterlistpatient.php',
        type: 'POST',
        data:{
            show: 1
        },
        success: function(response){
            $('#masterlistpatientTable').html(response);
            var table = $('#masterlistpatienttable').DataTable();
        }
    });
}

function showAdminPatient(){
    $.ajax({
        url: 'tables/masterlistpatient.php',
        type: 'POST',
        data:{
            show: 1
        },
        success: function(response){
            $('#masterlistpatientTable').html(response);
            var table = $('#masterlistpatienttable').DataTable();
        }
    });
}