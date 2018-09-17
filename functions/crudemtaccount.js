
$(document).ready(function(){
    showEMTAccount();
    //add call log
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
        url: '../tables/emtaccount.php',
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










