<div class="modal fade delete_dispatch" id="delete_dispatch<?php echo $fetch['dispatch_id']; ?>">
    <?php
    $query2 = $conn->query("select * from `dispatch` where `dispatch_id` = '".$fetch['dispatch_id']."'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Delete Dispatch Record Permanently</h4>
            </div>

            <div class="modal-body">
                <form id="dispatchform">
                    <p>All records in this dispatchment will be remove.</p>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger"  id="delete_dispatch"  value="<?php echo $fetch['dispatch_id']; ?>">Delete</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>