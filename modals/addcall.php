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
                                    <input type="text" id="date_time_call" name="date_time_call" class="form-control input-sm" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Complete Address</label>
                                <input type="text" class="form-control input-sm" id="complete_address" name="complete_address" placeholder="Enter Complete Address" required/>
                            </div>
                            <div class="form-group">
                                <label >Emergency Details / Complaint</label>
                                <textarea class="form-control" rows="3" id="emergency" name="emergency"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Name of Caller</label>
                                <input type="text" class="form-control input-sm" id="caller_name" name="caller_name" placeholder="Enter Name of Caller" required/>
                            </div>
                            <div class="form-group">
                                <label >Contact Number of Caller</label>
                                <input type="text" class="form-control input-sm" id="contact_no" name="contact_no" placeholder="Enter Contact Number of Caller" required/>
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