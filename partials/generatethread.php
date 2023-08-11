<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title " id="exampleModalLabel">Ask a Question</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="threadlist.php">
          <div class="mb-3">
            <label for="threadtitle" class="form-label">Thread Title</label>
            <input type="text" class="form-control" id="threadtitle" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Keep your Title as short and crisp as possible</div>
          </div>
          <div class="mb-3">
            <label for="threaddsc" class="form-label">Thread Description</label>
            <textarea class="form-control" id="threaddsc" rows="4" placeholder="Briefly Write Your Description"></textarea>
          </div>
          <div class="mb-3">
          <label for="catid" class="form-label">Category id</label>
          <input type="text" class="form-control" id="catid" >
          </div>
          <div class="mb-3">
          <label for="userid" class="form-label">User id</label>
          <input type="text" class="form-control" id="userid" >
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
