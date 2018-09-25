
$(document).ready(function(){
    showDBActivity();
    //export
    $(document).on('click', '#export', function(){
            $.ajax({
                type: "POST",
                url: "action/exportdatabase.php",
                data:{
                    add: 1
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Database Exported Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showDBActivity();
                }
            });
        
    });
});



//show dispatch
function showDBActivity(){
    $.ajax({
        url: 'tables/systembackupactivity.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#exportimportTable').html(response);
            var table = $('#exportimporttable').DataTable();
        }
    });
}









