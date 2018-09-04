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

            <div class="modal-body">
                <form id="userform">
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['username']; ?>" id="uusername<?php echo $fetch['user_id']; ?>" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['password']; ?>" id="upassword<?php echo $fetch['user_id']; ?>"  required/>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type = "button" class = "btn btn-sm btn-info" id="update_user" value="<?php echo $fetch['user_id']; ?>">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>