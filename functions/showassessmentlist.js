
$(document).ready(function(){
    showAssessment();
});



//show dispatch
function showAssessment(){
    $.ajax({
        url: 'tables/assessmentlist.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#assessmentlistTable').html(response);
            var table = $('#dispatchtable').DataTable();
        }
    });
}








