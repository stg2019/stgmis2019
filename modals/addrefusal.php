<div class="modal fade addrefusal" id="addrefusal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Release Form<span> Refusal of Treatment / Transportation</span></h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                           <label class="alert alert-warning"  style="text-align:justify;"><small>I hereby express my <strong>refusal to [treatment] or [transportation to a hospital]</strong> and I acknowledged that my refusal entails full knowledge of the risk and consequence as explained by the EMS crew. I hereby release the EMS crew of DRRMO Bacolod from any liability that may occur as a result of my refusal.</small></label>
                            <div class="form-group">
                                <label >Signed</label>
                                <input type="text" class="form-control input-sm" id="signed" name="signed" placeholder="Enter Patient Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Witness 1</label>
                                <input type="text" class="form-control input-sm" id="witness1" name="witness1" placeholder="Enter Witness 1 Name" required/>
                            </div>
                            <div class="form-group">
                                <label >Witness 2</label>
                                <input type="text" class="form-control input-sm" id="witness2" name="witness2" placeholder="Enter Witness 2 Name" required/>
                            </div>
                            <div class="form-group ">
                                <label >Date of Incident</label>
                                <div class="input-group date" id="datetimepicker1">
                                    <input type="text" id="date_incident" name="date_incident" class="form-control input-sm" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                            </div><hr>
                            <div class="form-group">
                                <label >Statements</label>
                                <textarea class="form-control" rows="6" id="statements" name="statements"></textarea>
                            </div>
                            <div class="form-group">
                                <label >Attachment: (legal documents etc.)</label>
                                <input type="text" class="form-control input-sm" id="attachment" name="attachment" placeholder="Enter Attachment" required/>
                            </div>
                            <div class="form-group">
                                <label >Prepared By</label>
                                <input type="text" class="form-control input-sm" id="prepared_by" name="prepared_by" placeholder="Enter Name" required/>
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