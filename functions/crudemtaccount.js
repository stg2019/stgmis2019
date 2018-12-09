
$(document).ready(function(){
    showEMTAccount();
    //add call log

    $("#complete_name").keyup(function(){
        var complete_name = $("#complete_name").val().trim();
        if(complete_name != ''){
            $("#cname_response").show();

            $.ajax({
                url: '../action/checkname.php',
                type: 'post',
                data: {complete_name:complete_name},
                success: function(response){
                    if(response > 0){
                        $("#cname_response").html("<span class='label label-danger'>Name already exist in database</span>");
                        $("#addnew").attr("disabled", true); 

                    }else{
                        $("#cname_response").html("");
                        $("#addnew").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#cname_response").hide();
        }
    });

    $("#username").keyup(function(){
        var username = $("#username").val().trim();
        if(username != ''){
            $("#uname_response").show();

            $.ajax({
                url: '../action/checkusername.php',
                type: 'post',
                data: {username:username},
                success: function(response){
                    if(response > 0){
                        $("#uname_response").html("<span class='label label-danger'>Username already exist in database</span>");
                        $("#addnew").attr("disabled", true); 

                    }else{
                        $("#uname_response").html("");
                        $("#addnew").attr("disabled", false); 
                    }
                }
            });
        }else{
            $("#uname_response").hide();
        }
    });

    $(document).on('click', '#addnew', function(){
        if ($('#complete_name').val()=="" || $('#username').val()=="" || $('#password').val()==""){
            $('#modallabel').slideDown();
            $('#checkfield').html('<span class="fa fa-exclamation-circle"></span> All fields are required!');
            setTimeout(function() {
                $('#modallabel').fadeOut('slow');
            }, 3500);
        }
        else{
            $complete_name=$('#complete_name').val();
            $username=$('#username').val();
            $password=$('#password').val();

            if(confirm('Are you sure you want to add this user?')){
                $.ajax({
                    type: "POST",
                    url: "../action/addemtaccount.php",
                    cache:false,
                    async:false,
                    data: {
                        complete_name : $complete_name,
                        username : $username,
                        password : $password,
                        add: 1,
                    },
                    success: function(){
                        $('.addemt').modal('hide');
                        $('#alert').slideDown();
                        $('#alerttext').html('<span class="fa fa-check"></span> New User Added Successfully!');
                        setTimeout(function() {
                            $('#alert').fadeOut('slow');
                        }, 1500);
                        showEMTAccount();
                        notificationNewUser();
                        notificationBadgeUser();
                    }
                });
            }
            $('form').trigger('reset');
        }

    });

});



//show dispatch
function showEMTAccount(){
    $.ajax({
        url: 'tables/emtaccount.php',
        type: 'POST',
        async: false,
        data:{
            show: 1
        },
        success: function(response){
            $('#emtTable').html(response);
            var table = $('#emttable').DataTable();
        }
    });
}










