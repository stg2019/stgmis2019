<div class="modal fade import" id="import" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center>
                    <div id="modallabel" class="alert alert-danger" style="display:none;">
                        <center><span id="checkfield"></span></center>
                    </div>
                </center>
                <h4 class="modal-title">Import Database</h4>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="file" name="database"/>
                    <!-- end panel -->
                </div>
                <div class="modal-footer">
                    <div id="please" style="float:left;"></div>
                    <button type="submit" class = "btn btn-sm btn-primary" name="import">Import Database</button>
                    <button type="button" class="btn btn-sm btn-white" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>