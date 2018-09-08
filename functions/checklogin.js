
$(document).ready(function(){
    //check username duplicates
    $("#username").keyup(function(){
        var username = $("#username").val().trim();
        if(username != ''){
            $("#uname_response").show();

            $.ajax({
                url: 'action/checkusername.php',
                type: 'post',
                data: {username:username},
                success: function(response){
                    if(response > 0){
                        $("#uname_response").html("");
                        $("#login").attr("disabled", false); 
                        
                    }else{
                        $("#uname_response").html("<span class='label label-danger'>Username does not exist in database</span>");
                        $("#login").attr("disabled", true); 
                    }
                }
            });
        }else{
            $("#uname_response").hide();
        }
    });


});




