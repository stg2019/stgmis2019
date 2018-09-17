<div class="modal fade addemt" id="addemt" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">New User</h4>
            </div>
            <div class="modal-body">
                <form id="dispatchform">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label >Complete Name</label>
                                <input type="text" class="form-control input-sm" id="complete_name" name="complete_name" placeholder="Enter Complete Name" required/>
                            </div>
                            <div id="uname_response"></div>
                            <div class="form-group">
                                <label >Username</label>
                                <input type="text" class="form-control input-sm" id="username" name="username" placeholder="Enter Username" required/>
                            </div>
                            <div class="form-group">
                                <label >Password</label>
                                <input type="password" class="form-control input-sm" id="password" name="password" placeholder="Enter Password" required/>
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