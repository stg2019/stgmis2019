<div class="modal fade" id="edit_user<?php echo $fetch['user_id']; ?>">
    <?php
    $query2 = $conn->query("select * from `users` where `user_id` = '".$fetch['user_id']."'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Update Account Details</h4>
            </div>
            <span id="result"></span>
            <form id="users" action="../action/usermanagement.update.php" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label > Complete Name</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['complete_name']; ?>" name="complete_name" required/>
                    </div>
                    <div class="form-group">
                        <label > Contact Number</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['contact_no']; ?>" name="contact_no" required/>
                    </div>
                    <div class="form-group">
                        <label > Home Address</label>
                        <input type="text" class="form-control" value="<?php echo $fetch2['home_address']; ?>" name="home_address" required/>
                    </div>
                    <hr>
                    <div class="form-group" >
                        <label for="exampleInputEmail1">Username</label>
                        <input type="hidden" value="<?php echo $fetch2['user_id']?>"/>
                        <input type="text" class="form-control" value="<?php echo $fetch2['username']; ?>"/>
                    </div>
                    <div class="form-group">
                        <label >Password</label>
                        <input type="text" class="form-control" name="password" id="password" required/>
                    </div>
                    <div class="form-group">
                        <label >Confirm Password</label>
                        <input type="text" class="form-control" name="confirm_password" id="confirm_password" required/>
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
