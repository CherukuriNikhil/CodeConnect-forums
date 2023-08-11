<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeConnect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

    <style>
    #container {
        min-height: 150px;
    }

    hr {
        border: 0px;
        height: 1px;
        background-color: black;
        margin: 3px 1px 0px;
    }
    </style>


    <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>

</head>

<body>


    <!-- Header -->

    <?php
      include('partials/connect.php');
      include('partials/header.php');
  ?>

    <?php
   $id = $_GET['threadid'];
   $sql = " SELECT * FROM `thread` WHERE thread_id = '$id' ";
   $result  = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($result)){
             $catname = $row['thread_title'];
             $catdsc = $row['thread_dsc'];
             $catid = $row['thread_cat_id'];
             $postedby = $row['thread_user_name'];
             
   }
  ?>

    <?php
    $insertthread = false ;
    $method = $_SERVER['REQUEST_METHOD'];
    // echo $method ;
    if($method == 'POST'){
    // insert thread into DB
    if (isset($_POST['comment']) ) {
        $comment = $_POST['comment'];
        $comment = str_replace("<", "&lt;" ,$comment );
        $comment = str_replace(">", "&gt;" ,$comment );
        $comment = str_replace("'", "&apos;" ,$comment );
        $comment = str_replace('"', "&quot;" ,$comment );

        $username = $_POST['username'];
        // Now you can use $th_title and $th_desc to insert the data into the database or perform other actions.
        // For example:
        $sql = "INSERT INTO `comments` (`comment_content`, `comment_by`, `thread_id`) VALUES ('$comment', '$username', '$id')";
        mysqli_query($conn, $sql);
        $insertthread = true;
    }
    }
    ?>




    <!-- Thread comments container starts here  -->
    <div class="container">
        <div class="my-4 p-4 bg-secondary text-white rounded">
            <h1 class="text-center"> <?php echo $catname;  ?> </h1>
            <p class="text-center"> <?php echo $catdsc;  ?>
            </p>
            <hr class="my-2">
            <p class="text-center ">Posted by user <b><?php echo $postedby;  ?></b></p>
        </div>
    </div>

    <?php


  if($insertthread){
    
  echo '<div class="alert alert-success alert-dismissible fade show" role="alert" container>
  <strong>Success!</strong> Your Comment is added successfully Thanks for Your Response
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  ?>


    <div class="container d-flex justify-content-between align-items-center" id="container">
        <h3 class="pb-2 ">Discussions</h3>
        <?php

               $nameuser = '';
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

            echo '
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Respond with a comment.
            </button> ' ; 

            $nameuser =  $_SESSION['username'] ;
           
            
        }  else{
            echo '<button type="button" class="btn btn-lg btn-info " disabled>Log In To Drop a Comment</button> ';
         }
        ?>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                            <h5 class="modal-title text-center" id="exampleModalLabel">Add a Comment</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <div class="modal-body">
                    <!-- Form strats from here -->
                    <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Comment By</label>
                        <input type="text" class="form-control" id="username" name="username" value="<?php  echo $nameuser; ?>" readonly>
                    </div>   
                    <div class="mb-3">
                        <label for="comment" class="form-label">Type your Comment</label>
                        <textarea class="form-control" id="comment" rows="4" name="comment"
                        placeholder="Briefly Write Your Description"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    <div class="container">

        <?php

        $id = $_GET['threadid'];
        $sql = " SELECT * FROM `comments` WHERE thread_id = '$id' ";
        $result  = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num>0){
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['comment_id'];
            $comment = $row['comment_content'];
            $comment_time = $row['comment_time'];
            $commentedby = $row['comment_by']; 



               echo '
                <div class="d-flex">
                <div class="flex-shrink-0">
                <img src="images/user_default.png" alt="User Profile" width="64" height="64" class="pt-1">
                </div>
                <div class="flex-grow-1 ms-3">
                
                <p class="my-0">'.$comment.'</p> 
                <hr>
           <small  >Commented by '.$commentedby.' at '.$comment_time.'</small>
                </div>
                </div>
               ';
               echo ' <br>';


        }
        }else{
        echo '<div class="alert alert-primary text-center" role="alert">
        <h5>No Comment Yet</h5>
        Be The First person to answer the Question and Help The User
        </div>';
        }
        ?>

    </div>





    </div>
    <?php  include('partials/footer.php'); ?>


</body>





</html>