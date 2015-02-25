<div class="modal fade" id="newEvent-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">New event</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="input-group">
                        <label class="input-group-addon" for="recipient-name" class="control-label">Title:</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" for="recipient-name" class="control-label">Time:</label>
                        <input type="text" class="form-control" id="time">
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" for="message-text" class="control-label">Content:</label>
                        <textarea class="form-control" id="content"></textarea>
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" for="message-text" class="control-label">Gyphicon:</label>
                        <input class="form-control" id="glyphicon"></input>
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" for="message-text" class="control-label">Category:</label>
                        <input class="form-control" id="category"></input>
                    </div>
                    <div class="input-group">
                        <label class="btn btn-default">
                            <input id="inverted" type="checkbox" autocomplete="off"> Left or Right
                        </label>
                        <label class="btn btn-default">
                            <input id="initToggled" type="checkbox" autocomplete="off"> Initial toggled
                        </label>
                    </div>
                    <div class="input-group">
                        <label class="input-group-addon" for="message-text" class="control-label">Image path:</label>
                        <input class="form-control" id="img"></input>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="randomEvent()" data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span> Add Random Event</button>
                <button type="button" class="btn btn-success" onclick="getValsAndCreateNewEvent()" data-dismiss="modal"><span class="glyphicon glyphicon-plus"></span> Add Event</button>
            </div>
        </div>
    </div>
</div>

