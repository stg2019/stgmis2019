<div class="modal fade addmedicalsupply" id="addmedicalsupply" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
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
                                <input type="hidden" id="admin_id" name="admin_id" value="<?php echo $find['user_id']?>"/>
                                <label >Medical Supply Name</label>
                                <input type="text" class="form-control input-sm" id="medical_supply_name" name="medical_supply_name" placeholder="Enter Medical Supply Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Medical Supply Description</label>
                                <textarea class="form-control" rows="2" id="medical_supply_description" name="medical_supply_description"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Name of Supplier</label>
                                <input type="text" class="form-control input-sm" id="supplier" name="supplier" placeholder="Enter Name of Supplier" required/>
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