
$(document).ready(function(){
    //Update Account
    $(document).on('click', '.update_account', function(){
        $user_id=$(this).val();
        $complete_name = $('#complete_name'+$user_id).val();
        $contact_no = $('#contact_no'+$user_id).val();
        $home_address = $('#home_address'+$user_id).val();
        $username = $('#username'+$user_id).val();
        $password = $('#password'+$user_id).val();

        if(confirm('Are you sure you want to update this account?')){
            $.ajax({
                type: "POST",
                url: "../action/updateaccount.php",
                data: {
                    user_id : $user_id,
                    complete_name: $complete_name,
                    contact_no : $contact_no,
                    home_address : $home_address,
                    username : $username,
                    password : $password,
                    edit: 1,
                },
                success: function(){
                    $('#alert').slideDown();
                    $('#alerttext').html('<span class="fa fa-check"></span> Account Updated Successfully');
                    setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 1500);
                    setTimeout(function() {
                        window.location.href = 'usermanagement.php'; 
                    }, 2000);
                }
            });

        }


    });

});










