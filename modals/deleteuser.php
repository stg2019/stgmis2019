<div class="modal fade delete_user" id="delete_user<?php echo $fetch['user_id']; ?>">
    <?php
    $conn = new mysqli("localhost", "root", "", "ndrrmo") or die(mysqli_error());
    $query2 = $conn->query("select * from `users` where `user_id` = '".$fetch['user_id']."'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete User</h4>
            </div>

            <div class="modal-body">
                <form id="userform">
                    <p>Are you sure?</p>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger"  id="delete_user"  value="<?php echo $fetch['user_id']; ?>">Delete</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>