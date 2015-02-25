<div class="modal fade" id="import-Modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Import Json</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <label class="input-group-addon" for="json string" class="control-label">JSON:</label>
                        <textarea class="form-control" id="json"></textarea>
                    </div>
                    <div class="input-group">
                        <label class="btn btn-default">
                            <input id="append" type="checkbox" autocomplete="off"> Append to existing list
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="sTimeline.importJSON($('#json').val(), $('#append').prop('checked'))" data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span> Add Event</button>
            </div>
        </div>
    </div>
</div><!-- End MODAL -->