$(document).ready(function(){
    showItemUsed();


});


function showItemUsed(){
    $dispatch_id=$('#additem').val(); 
    $.ajax({
        url: 'tables/itemused.php',
        type: 'POST',
        data:{
            dispatch_id : $dispatch_id,
            show: 1
        },
        success: function(response){
            $('#itemtable').html(response);

        }
    });
}









