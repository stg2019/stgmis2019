$(document).ready(function(){
    showPatient();
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