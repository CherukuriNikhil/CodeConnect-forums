<!-- Button trigger modal -->


<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginmodal">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="loginmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginmodalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action = "partials/handlelogin.php" method = "POST">
        <div class="mb-3">
          <label for="usermail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="usermail" name= "usermail" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
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