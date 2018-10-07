
$(document).ready(function(){

    $('#btn_delete').click(function(){

        if(confirm("Are you sure you want to delete this?"))
        {
            var id = [];

            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });

            if(id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            }
            else
            {
                $.ajax({
                    url:'../action/usermanagement.delete.php',
                    method:'POST',
                    data:{id:id},
                    success:function()
                    {
                        for(var i=0; i<id.length; i++)
                        {
                            $('tr#'+id[i]+'').css('background-color', '#ccc');
                            $('tr#'+id[i]+'').fadeOut('slow');
                        }
                    }

                });
            }

        }
        else
        {
            return false;
        }
    });

});
$(document).ready(function(){

    $('#btn_activate').click(function(){

        if(confirm("Are you sure you want to Activate this?"))
        {
            var id = [];

            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });

            if(id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            }
            else
            {
                $.ajax({
                    url:'../action/usermanagement.activate.php',
                    method:'POST',
                    data:{id:id},
                    success:function()
                    {

                    }

                });
            }

        }
        else
        {
            return false;
        }
    });

});     
$(document).ready(function(){

    $('#btn_deactivate').click(function(){

        if(confirm("Are you sure you want to Deactivate this?"))
        {
            var id = [];

            $(':checkbox:checked').each(function(i){
                id[i] = $(this).val();
            });

            if(id.length === 0) //tell you if the array is empty
            {
                alert("Please Select atleast one checkbox");
            }
            else
            {
                $.ajax({
                    url:'../action/usermanagement.deactivate.php',
                    method:'POST',
                    data:{id:id},
                    success:function()
                    {

                    }

                });
            }

        }
        else
        {
            return false;
        }
    });

});                  
$(document).ajaxStop(function(){
    window.location.reload();
});  
