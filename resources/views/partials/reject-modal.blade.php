<div class="modal fade" id="reject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title" id="exampleModalLabel">Rejection Details</h3>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="{{$route}}">
                @csrf
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="form-group">
                    <label for="message-text" class="col-form-label">Reason for Rejection:</label>
                    <textarea class="form-control" name="message" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send message</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>
        </div>
        </div>
    </div>
</div>  