<div class="modal fade addcall" id="addcall" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Call Log</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label >Date and Time of Call</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="text" id="date_incident" name="date_incident" class="form-control input-sm" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Complete Address</label>
                                <input type="text" class="form-control input-sm" id="signed" name="signed" placeholder="Enter Complete Address" required/>
                            </div>
                            <div class="form-group">
                                <label >Emergency Details / Complaint</label>
                                <textarea class="form-control" rows="3" id="statements" name="statements"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Name of Caller</label>
                                <input type="text" class="form-control input-sm" id="witness2" name="witness2" placeholder="Enter Name of Caller" required/>
                            </div>
                            <div class="form-group">
                                <label >Contact Number of Caller</label>
                                <input type="text" class="form-control input-sm" id="witness2" name="witness2" placeholder="Enter Contact Number of Caller" required/>
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