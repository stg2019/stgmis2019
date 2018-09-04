<div class="modal fade addrequesttransport" id="addrequesttransport" tabindex="-1" role="dialog" aria-labelledby="largeModalHead" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">New Request</h4>
            </div>
            <div class="modal-body">
                <form id="requestform">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group ">
                                <label >Date and Time</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="text" id="date_time" name="date_time_call" class="form-control input-sm" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >Requesting Party</label>
                                <input type="text" class="form-control input-sm" id="requesting_party" name="requesting_party" placeholder="Enter Requesting Pary" required/>
                            </div>
                            <div class="form-group">
                                <label >Contact Number</label>
                                <input type="text" class="form-control input-sm" id="contact_no" name="contact_no" placeholder="Enter Contact Number" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Patient Name</label>
                                <input type="text" class="form-control input-sm" id="patient_name" name="patient_name" placeholder="Enter Patient Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Address</label>
                                <input type="text" class="form-control input-sm" id="address" name="address" placeholder="Enter Address" required/>
                            </div>

                            <div class="form-group">
                                <label >Age and Gender</label>
                                <div class="row row-space-12">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm"  id="age" name="age" placeholder="Enter Age" />
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-control selectpicker input-sm" data-style="btn-white" id="gender" name="gender">
                                            <option value="" selected disabled>Select Gender</option>
                                            <option value="Male">Male </option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Medical History</label>
                                <input type="text" class="form-control input-sm" id="medical_history" name="medical_history" placeholder="Enter Patient Medical History" required/>
                            </div>
                            <div class="form-group">
                                <label >Special Considerations for attached:</label>
                                <select class="form-control selectpicker input-sm" data-style="btn-white" id="special_considerations" name="special_considerations">
                                    <option value="" selected disabled>Select Option</option>
                                    <option value="NGT">NGT</option>
                                    <option value="Catheter">Catheter</option>
                                    <option value="Chest Tube Drainage">Chest Tube Drainage</option>
                                    <option value="Colostomy">Colostomy</option>
                                    <option value="Endo Tracheal Tube">Endo Tracheal Tube</option>
                                    <option value="02">02</option>
                                    <option value="IV">IV</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label >Destination</label>
                                <input type="text" class="form-control input-sm" id="froma" name="froma" placeholder="From" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" id="toa" name="toa" placeholder="To" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" id="fromb" name="fromb" placeholder="From" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >GCS and BP</label>
                                <div class="row row-space-12">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="gcs" name="gcs" placeholder="Enter GCS" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="bp" name="bp" placeholder="Enter BP" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >RR and PR</label>
                                <div class="row row-space-12">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="rr" name="rr" placeholder="Enter RR" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="pr" name="pr" placeholder="Enter PR" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label >02 Sat</label>
                                <input type="text" class="form-control input-sm" id="sat" name="sat" placeholder="Enter 02 Sat" required/>
                            </div>
                            <div class="form-group">
                                <label >Requesting Approval and Approval</label>
                                <div class="row row-space-12">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="requesting_approval" name="requesting_approval" placeholder="Enter Requesting Approval" required/>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control input-sm" id="approval" name="approval" placeholder="Enter Approval" required/>
                                    </div>
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