<!-- Button trigger modal -->


<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signupmodal">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="signupmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="signupmodalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupmodalLabel">Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action = "partials/handleSignup.php" method="POST">
        <div class="mb-3">
          <label for="username" class="form-label">Name</label>
          <input type="text" class="form-control" id="username" name="username" >
        </div>
        <div class="mb-3">
          <label for="useremail" class="form-label">Email address</label>
          <input type="email" class="form-control" id="useremail"  name="useremail" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
          <label for="cpassword" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="cpassword" name="cpassword">
        </div>
        <button type="submit" class="btn btn-primary text-center">Submit</button>
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>