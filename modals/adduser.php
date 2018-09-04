<div class="modal fade adduser" id="adduser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">New User</h4>
            </div>
            <div class="modal-body">
                <form id="userform">
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" required/>
                        <div id="uname_response"></div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" required/>
                    </div>
                </form>
                <!-- end panel -->
            </div>
            <div class="modal-footer">
                <div id="please" style="float:left;"></div>
                <button type = "button" id="addnew" class = "btn btn-sm btn-info">Save</button>
                <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>