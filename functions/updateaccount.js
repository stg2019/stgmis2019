
$(document).ready(function(){

    $("#passwordold").keyup(function(){
        var passwordold = $("#passwordold").val().trim();
        if(passwordold != ''){
            $("#pword_response").show();

            $.ajax({
                url: '../action/checkoldpassword.php',
                type: 'post',
                data: {passwordold:passwordold},
                success: function(response){
                    if(response > 0){
                        $("#pword_response").html("");
                        $("#savechanges").attr("disabled", false);
                    }else{
                        $("#pword_response").html("<span class='label label-danger'>Old Password does not match.</span>");
                        $("#savechanges").attr("disabled", true); 

                    }
                }
            });
        }else{
            $("#pword_response").hide();
        }
    });

    $(document).on('click', '#savechanges', function(){
        if ($('#complete_name').val()=="" || $('#username').val()=="" || $('#password').val()=="" || $('#password').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $user_id = $('#user_id').val();
            $complete_name=$('#complete_name').val();
            $username=$('#username').val();
            $password=$('#password').val();

            if(confirm('Are you sure you want to edit your account?')){
                $.ajax({
                    type: "POST",
                    url: "../action/updateaccount.php",
                    cache:false,
                    async:false,
                    data: {
                        user_id : $user_id,
                        complete_name : $complete_name,
                        username : $username,
                        password : $password,
                        edit: 1,
                    },
                    success: function(){
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> Account Updated Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        setTimeout(function() {
                            window.location.href = 'admindashboard.php'; 
                        }, 2000);
                    }
                });
            }
        }

    });

});





