<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>  
    
    
  
  
  </head>
  <body>
    

  <!-- Header -->

  <?php
      include('partials/connect.php');
      include('partials/header.php');
      
  ?> 

<!-- <h3 class="text-center mt-1 ">CodeConnect Browse-Categories</h3> -->


<!-- slider started here -->
<div id="carouselExampleIndicators" class="carousel slide mb-2" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/Slider_1.jpg" class="d-block w-100 " alt="..." height="350">
    </div>
    <div class="carousel-item">
      <img src="images/Slider_2.jpg" class="d-block w-100 " alt="..." height="350">
    </div>
    <div class="carousel-item">
      <img src="images/Slider_3.jpg" class="d-block w-100 " alt="..." height="350">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- category container starts here  -->
<div class="container">
 
  <h3 class="text-center mt-1 ">CodeConnect Browse-Categories</h3> 

  <div class="row d-flex justify-content-between" >
    <?php
      $sql = "SELECT * FROM `categories`";
      $result = mysqli_query($conn,$sql);
      // $num  = mysqli_num_rows($result);

      // use for loop to show all categories 
      while($row = mysqli_fetch_assoc($result)){
      // echo $row['category_id'] .$row['category_name'] .$row['category_description'] ;
      // echo ('<br>');
      
      $id = $row['category_id'];
      $cat = $row['category_name'];
      $dsc = $row['category_description'];

      echo '<div class="col-md-4 my-4 ">
      <div class="card" style="width: 18rem;">
      <img src="images/'.$cat.'.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center"><a href = "threadlist.php?catid='.$id.'">'.$cat.'</a></h5>
        <p class="card-text text-center">'. substr($dsc,0,100).'...</p>
        <div class="text-center"> <!-- Add this div for centering the button -->
          <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
        </div>
      </div> </div></div>'; }
    ?>
  </div> 
</div>





<?php
     include('partials/footer.php');
?>
    


</body>
</html>