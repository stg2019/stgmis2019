<div class="modal fade requestsupplies" id="requestsupplies" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Request Stocks</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Medical Supply Name</label>
                                <select  class="form-control selectpicker input-sm" data-live-search="true" data-style="btn-white" id="medical_supply_name" name="medical_supply_name">
                                    <option value="#" disabled>Select</option>
                                    <?php
                                    require 'require/dbconnection.php';
                                    $query = $conn->query("SELECT * FROM `medical_supply_stocks`") or die(mysqli_error());

                                    while($fetch = $query->fetch_array()){
                                    ?>
                                    <option value="<?php echo $fetch['medical_supply_name'];?>"><?php echo $fetch['medical_supply_name']?></option>
                                    <?php
                                    }
                                    ?> 
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Requested Quantity</label>
                                <input type="text" class="form-control input-sm" id="requested_quantity" name="requested_quantity" placeholder="Enter Requested Quantity" required/>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <div id="please" style="float:left;"></div>
                <button type = "button" id="addnew" class = "btn btn-sm btn-success">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>