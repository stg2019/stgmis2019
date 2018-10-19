<div class="modal fade approve" id="approve<?php echo $fetch['medical_supply_request_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <?php
    require '../require/dbconnection.php';
    $query2 = $conn->query("select * from `medical_supply_request` where `medical_supply_request_id` = '".$fetch['medical_supply_request_id']."'") or die(mysqli_error());
    $fetch2 = $query2->fetch_array();
    ?>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Approve Medical Supply Request</h4>
            </div>
            <div class="modal-body">
                <form id="userform">
                    <input type="text" name="medical_supply_request_id" id="medical_supply_request_id" value="<?php echo $fetch2['medical_supply_request_id']?>" />
                    <input type="text" name="requested_quantity" id="requested_quantity" value="<?php echo $fetch2['requested_quantity']?>" />
                    <input type="text" name="medical_supply_name" id="medical_supply_name" value="<?php echo $fetch2['medical_supply_name']?>" />
                    <p class="alert alert-warning">Are you sure you want to approve this request?</p>
                    <h5>Requested Quantity : <?php echo $fetch2['requested_quantity']. '<br> <br> Medical Supply : ' .$fetch2['medical_supply_name']?></h5>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <div id="please" style="float:left;"></div>
                <button type = "button" class = "btn btn-sm btn-primary approverequest">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>