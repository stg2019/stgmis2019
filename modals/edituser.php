<div class="modal fade" id="edit_user<?php echo $fetch['user_id']; ?>">
    <?php
    $query2 = $conn->query("select * from `users` where `user_id` = '".$fetch['user_id']."'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Edit User</h4>
            </div>
            <span id="result"></span>
     <form id="userform" action="../action/usermanagement.update.php" method="post">
            <div class="modal-body">
           
                    <div class="form-group" >
                        <input type="text" class="form-control" value="<?php echo $fetch2['user_id']; ?>" name="id" id="username<?php echo $fetch['user_id']; ?>" />
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['username']; ?>" id="username<?php echo $fetch['user_id']; ?>" disabled/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['password']; ?>" name="password" id="password<?php echo $fetch['user_id']; ?>"  required/>
                    </div>
               
                
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type = "post" class = "btn btn-sm btn-info" id="update_user" name="update_user" >Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
</form>
        </div>
    </div>
</div>
