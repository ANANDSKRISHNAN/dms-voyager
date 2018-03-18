<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">

        <form action="/send/mail" method="post">
          <div>
            <label> From </label>
            <input type="text" name="from">
          </div>
          <div>
            <label> To </label>
            <input type="text" name="to" id="to">
          </div>
          <div>
            <label> CC </label>
            <input type="text" name="cc">
          </div>
          <div>
            <label> Subject </label>
            <input type="text" name="subject">
          </div>
          <div>
            <label> Body </label>
            <textarea name="body"></textarea>
          </div>
        </div>
        <input type="hidden" id="user_id" name="user_id">
        <div class="modal-footer">
          <button type="button" class="btn btn-default">Send</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
