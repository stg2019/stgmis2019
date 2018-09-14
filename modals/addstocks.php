<div class="modal fade addstocks" id="addstocks" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Add Stocks</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Name of Supplier</label>
                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="ambulance" name="ambulance">
                                    <option value="" selected disabled>Select Option</option>
                                    <option value="Puregold">Puregold</option>
                                    <option value="SM">SM</option>
                                    <option value="Banago">Banago</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Name of Medical Supply</label>
                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="ambulance" name="ambulance">
                                    <option value="" selected disabled>Select Option</option>
                                    <option value="Puregold">Puregold</option>
                                    <option value="SM">SM</option>
                                    <option value="Banago">Banago</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Number of Stocks</label>
                                <input type="text" class="form-control input-sm" id="moi_noi" name="moi_noi" placeholder="Enter MOI/NOI" required/>
                            </div>
                            <div class="form-group ">
                                <label >Date and Time Added</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="text" id="date_time_call" name="date_time_call" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <button type = "button" id="addnew" class = "btn btn-sm btn-success">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>