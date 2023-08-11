<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    
    </head>

<body>
    <?php
      include('partials/connect.php');
      include('partials/header.php');
  ?>

  <?php

$message ="false";
$querymsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['name'];
  $useremail = $_POST['email'];
  $msg = $_POST['message'];

  $sql = "INSERT INTO `contact` (`user_name`, `user_email`, `user_message`) VALUES ('$username', '$useremail', '$msg')";
  $result = mysqli_query($conn, $sql);

  if($result){
    $message ="true";
    $querymsg ="We Will Contact You soon";
  }

}

  ?>

<?php


// Only show the alert if the form is submitted successfully
if ($_SERVER["REQUEST_METHOD"] == "POST" && $message === "true") {
  echo '<div class="alert alert-warning alert-dismissible fade show container" role="alert">
  <strong></strong> ' . $querymsg . '
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>


<div class="container my-3 bg-dark rounded-5 py-2 ">
<div class="text-center" style="max-width: 180px; margin:auto">
            <h3 class="text-light py-1 border border-light rounded-4 my-2">Contact Me</h3>
        </div>
    <div class="row justify-content-center">
      <div class="col-md-6 text-light">
        <form action="#" method="post">
            
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
      </div>
    </div>
  </div>


  <div class="container text-center">
  <a href="mailto:narasinganikhil@gmail.com" target="_blank"><box-icon name='gmail' type='logo' ></box-icon></a>
  <a href="https://www.linkedin.com/in/narasinga-nikhil-cherukuri" target="_blank"><box-icon type='logo' name='linkedin'></box-icon></a>
  <a href="https://github.com/CherukuriNikhil" target="_blank"></span><box-icon type='logo' name='github'></box-icon></a>

 
  </div>








    <?php
     include('partials/footer.php');
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>


        

        


</body>

</html>



