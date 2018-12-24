
$(document).ready(function(){
    showDBActivity();
    //export
    $(document).on('click', '#export', function(){
        if(confirm('Are you sure you want to export database as SQL File?')){
            $.ajax({
                type: "POST",
                url: "../admindbbackup/exportdatabase.php",
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Database Exported Successfully!');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showDBActivity();
                }
            });
        }

    });
});



//show database backup activity
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









