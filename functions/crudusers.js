
$(document).ready(function(){
    showUser();
    //check username duplicates
    $("#username").keyup(function(){
        var username = $("#username").val().trim();
        if(username != ''){
            $("#uname_response").show();
            $("#please").show();

            $.ajax({
                url: 'action/checkusername.php',
                type: 'post',
                data: {username:username},
                success: function(response){
                    if(response > 0){
                        $("#uname_response").html("<span class='label label-danger'>Username already taken</span>");
                        $("#please").html("<span class='label label-danger'>Please fill up all fields correctly!</span>");
                        $("#addnew").attr("disabled", true); 
                    }else{
                        $("#uname_response").html("");
                        $("#please").html("");
                        $("#addnew").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#uname_response").hide();
            $("#please").hide();
        }
    });



    //add user
    $(document).on('click', '#addnew', function(){
        if ($('#username').val()=="" || $('#password').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').text('All fields are required');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $username=$('#username').val();
            $password=$('#password').val();	
            $.ajax({
                type: "POST",
                url: "action/adduser.php",
                cache:false,
                async:false,
                data: {
                    username: $username,
                    password: $password,
                    add: 1,
                },
                success: function(){
                    $('.adduser').modal('hide');
                    $('#alert').slideDown();
                    $('#alerttext').text('User Added Successfully');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    showUser();
                }
            });
            $('form').trigger('reset');
        }

    });


    //update user
    $(document).on('click', '#update_user', function(){
        $uid=$(this).val();
        $('#edit'+$uid).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $uusername=$('#uusername'+$uid).val();
        $upassword=$('#upassword'+$uid).val();
        $.ajax({
            type: "POST",
            url: "action/edituser.php",
            data: {
                id: $uid,
                username: $uusername,
                password: $upassword,
                edit: 1,
            },
            success: function(){
                $('#alert').slideDown();
                $('#alerttext').text('User Edited Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showUser();
            }
        });
    });


    //delete user
    $(document).on('click', '#delete_user', function(){
        $id=$(this).val();
        $('#delete_user'+$id).modal('hide');
        $('body').removeClass('modal-open');
        $('.modal-backdrop').remove();
        $.ajax({
            type: "POST",
            url: "action/deleteuser.php",
            data: {
                id: $id,
                del: 1,
            },
            success: function(){
                $('.delete_user').modal('hide');
                $('#alert').slideDown();
                $('#alerttext').text('User Deleted Successfully');
                setTimeout(function() {
                    $('#alert').fadeOut('slow');
                }, 1500);
                showUser();
            }
        });


    });

});



//show users
function showUser(){
    $.ajax({
        url: 'tables/userslist.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#userTable').html(response);
            var table = $('#userstable').DataTable();
        }
    });
}




