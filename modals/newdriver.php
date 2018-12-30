<div class="modal fade newdriver" id="newdriver" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">New Driver</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="cname_response"></div>
                            <div class="form-group">
                                <label >Driver Name</label>
                                <input type="text" class="form-control input-sm" id="driver_name" name="driver_name" placeholder="Enter Driver Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Age</label>
                                <input type="text" class="form-control input-sm" id="age" name="age" placeholder="Enter Age" required/>
                            </div>
                            <div class="form-group">
                                <label >Gender</label>
                                <select  class="form-control selectpicker input-sm" data-style="btn-white" id="gender" name="gender">
                                    <option selected disabled>Select</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Contact Number</label>
                                <input type="text" class="form-control input-sm" id="contact_number" name="contact_number" placeholder="Enter Contact Number" required/>
                            </div>
                            <div class="form-group">
                                <label >Home Address</label>
                                <input type="text" class="form-control input-sm" id="home_address" name="home_address" placeholder="Enter Home Address" required/>
                            </div>
                            <div class="form-group">
                                <label >Duty Hours</label>
                                <select  class="form-control selectpicker input-sm" data-style="btn-white" id="duty_hours" name="duty_hours">
                                    <option selected disabled>Select</option>
                                    <option value="9:00 AM - 9:00 PM">9:00 AM - 9:00 PM</option>
                                    <option value="9:00 PM - 9:00 AM">9:00 PM - 9:00 AM</option>
                                </select>
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