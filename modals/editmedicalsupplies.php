<div class="modal fade editmedicalsupply" id="edit<?php echo $fetch['stock_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <?php
    require '../require/dbconnection.php';
    $query2 = $conn->query("select * from `medical_supply_stocks` where `stock_id` = '".$fetch['stock_id']."'") or die(mysqli_error());
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
                <h4 class="modal-title">New Medical Supply</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Medical Supply Name</label>
                                <input type="text" class="form-control input-sm"  value="<?php echo $fetch2['medical_supply_name']; ?>" id="umedical_supply_name<?php echo $fetch['stock_id']; ?>" name="medical_supply_name" placeholder="Enter Medical Supply Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Medical Supply Description</label>
                                <textarea class="form-control" rows="2"  value="<?php echo $fetch2['medical_supply_description']; ?>" id="umedical_supply_description<?php echo $fetch['stock_id']; ?>" name="medical_supply_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Name of Supplier</label>
                                <input type="text" class="form-control input-sm" value="<?php echo $fetch2['supplier']; ?>" id="usupplier<?php echo $fetch['stock_id']; ?>" name="supplier" placeholder="Enter Name of Supplier" required/>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <div id="please" style="float:left;"></div>
                <button type = "button" id="addnew" class = "btn btn-sm btn-primary">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>