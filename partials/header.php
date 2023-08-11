<?php
include('connect.php');

// Define $showerror with an empty value initially
$showerror = "";

// Check if the handleSignup.php file is included in this request
if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "false" && isset($_GET['error'])) {
    // If the handleSignup.php file was included and there is an error message, set $showerror
    $showerror = $_GET['error'];
}


if (isset($_GET['loginsuccess']) && $_GET['loginsuccess'] == "false" && isset($_GET['error'])) {
  // If the handleSignup.php file was included and there is an error message, set $showerror
  $showerror = $_GET['error'];
}




session_start();


echo '
<div class="header">
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
        <a class="navbar-brand text-primary" href="/forums">CodeConnect</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="/forums">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="contact.php">Contact</a>
          </li>
          </ul>
          </div>
          <div class="d-flex align-items-center ">
        
       ';

        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
          echo'
              
          <button type="button" class="btn btn-lg btn-success mx-2" disabled>Welcome ' . $_SESSION['username'] . '</button>
          <a href="partials/logout.php" class="btn btn-primary mx-1 my-1">Logout</a>
            ';
        }else{
          echo '
          
         
          <button type="button" class="btn btn-outline-primary mx-1" data-bs-toggle="modal" data-bs-target="#loginmodal">
          Login
      </button>
      <button type="button" class="btn btn-outline-primary mx-1" data-bs-toggle="modal" data-bs-target="#signupmodal">
          SignUp
        </button>
        
        </div>';
        }

          echo' 
        
      </div>
    </div>
  </nav>

</div>';

require('partials/loginmodal.php');
require('partials/signupmodal.php');

if (isset($_GET['signupsuccess']) && $_GET['signupsuccess'] == "true") {
    echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <strong>Success!</strong> You Can Login Now
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} else if (!empty($showerror)) {
    echo '<div class="alert alert-danger alert-dismissible fade show mb-0 text-center fs-5 " role="alert">
  ' . $showerror . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>