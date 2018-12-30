<div class="modal fade newambulance" id="newambulance" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">New Ambulance</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="cname_response"></div>
                            <div class="form-group">
                                <label >Plate Number</label>
                                <input type="text" class="form-control input-sm" id="plate_no" name="plate_no" placeholder="Enter Plate Number" required/>
                            </div>
                            <div class="form-group">
                                <label >Vehicle Name</label>
                                <input type="text" class="form-control input-sm" id="vehicle_name" name="vehicle_name" placeholder="Enter Vehicle Name" required/>
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