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
        <script>
        if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
        }
    </script>

    <style>
    #questions {
        min-height: 194px;
    }

    hr{
        border: 0px;
        height: 1px;
        background-color: black;
        margin : 3px 1px 0px;
    }
    </style>

</head>

<body>


    <!-- Header -->

    <?php
      include('partials/connect.php');
      include('partials/header.php');
  ?>

    <?php

   $id = $_GET['catid'];
   $sql = " SELECT * FROM `categories` WHERE category_id = $id ";
   $result  = mysqli_query($conn,$sql);
   while($row = mysqli_fetch_assoc($result)){
             $catname = $row['category_name'];
             $catdsc = $row['category_description'];
   }
  ?>

    <?php
$insertthread = false ;
$method = $_SERVER['REQUEST_METHOD'];
// echo $method ;
if($method == 'POST'){
  // insert thread into DB
  if (isset($_POST['title']) && isset($_POST['desc'])) {
    $th_title = $_POST['title'];
    $th_desc = $_POST['desc'];
    $username = $_POST['username'];

    $th_title = str_replace("<", "&lt;" ,$th_title );
    $th_title = str_replace(">", "&gt;" ,$th_title );
    $th_title = str_replace("'", "&apos;" ,$th_title );
    $th_title = str_replace('"', "&quot;" ,$th_title );

    $th_desc = str_replace("<", "&lt;" ,$th_desc );
    $th_desc = str_replace(">", "&gt;" ,$th_desc );

    $th_desc= str_replace("'", "&apos;" ,$th_desc );
    $th_desc = str_replace('"', "&quot;" ,$th_desc);



    // Now you can use $th_title and $th_desc to insert the data into the database or perform other actions.
    // For example:
    $sql = "INSERT INTO `thread` (`thread_title`, `thread_dsc`, `thread_cat_id`, `thread_user_name`) VALUES ('$th_title', '$th_desc','$id','$username')";
    mysqli_query($conn, $sql);
    $insertthread = true;
}
}
?>


    <!-- Threads container starts here  -->

    <div class="container">
        <div class="my-4 p-4 bg-secondary text-white rounded">
            <h1 class="text-center">Welcome to <?php echo $catname;  ?> Forums</h1>
            <p> <?php echo $catdsc;  ?>
            </p>
            <hr class="my-2">
            <p class="text-center">This is a perr to peer forum for sharing knowledge with Each Other.</p>
        </div>
    </div>

    <?php

              if($insertthread){
                echo '<div class="alert alert-success alert-dismissible fade show container" role="alert">
                <strong>Success!</strong> Your Query is added successfully please wait for community to respond
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              }
    ?>

    <div class="container" id="questions">


        <div class="container d-flex justify-content-between align-items-center">
            <h3 class="pb-2 ">Explore inquiries</h3>
           
           <?php

            $nameuser = ''; 
           if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

            echo '
                <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Instigate a conversation
            </button> ' ;

            $nameuser =  $_SESSION['username'] ;
        
        }
            else{
               echo '<button type="button" class="btn btn-lg btn-info " disabled>Log In To Ask Your Query</button> ';
               
            }

            ?>
        </div>

         <!-- Modal -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title " id="exampleModalLabel">Ask a Question</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Form strats from here -->
                            <form action="<?php echo $_SERVER['REQUEST_URI']?>" method="POST">
                            <div class="mb-3">
                             <label for="username" class="form-label">Query By</label>
                             <input type="text" class="form-control" id="username" readonly name="username" value="<?php  echo $nameuser; ?>" >
                            </div>
                            <div class="mb-3">
                                <label for="threadtitle" class="form-label">Thread Title</label>
                                <input type="text" class="form-control" id="threadtitle" name="title"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Keep your Title as short and crisp as possible </div>
                            </div>
                            <div class="mb-3">
                                    <label for="threaddsc" class="form-label">Thread Description</label>
                                    <textarea class="form-control" id="threaddsc" rows="4" name="desc"
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




        <?php

   $id = $_GET['catid'];
   $sql = " SELECT * FROM `thread` WHERE thread_cat_id = $id ";
   $result  = mysqli_query($conn,$sql);
   $num = mysqli_num_rows($result);
   if($num>0){
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['thread_id'];
        $question = $row['thread_title'];
        $threaddsc = $row['thread_dsc'];
        $timestamp = $row['thread_created_time'];
        $threadusername = $row['thread_user_name']; 


        echo '<div class="d-flex ">
        <div class="flex-shrink-0">
            <img src="images/user_default.png" alt="User Profile" width="64" height="64" class="pt-1">
        </div>
        <div class="flex-grow-1 ms-3">
            <h5 >
            <a href="thread.php?threadid='.$id.'" class="text-dark"> '.   $question .'</a>
            </h5>
           <p class="mb-0">'.$threaddsc.'</p> 
           <hr>
           <small  >Doubt arised by '.$threadusername.' at '.$timestamp.'</small>
        </div>
    </div>';

    echo ' <br>';
     }
   }else{
    echo '<div class="alert alert-primary text-center" role="alert">
    <h5>No Threads Found</h5>
    Be The First person to ask the Question
  </div>';
   }

  
  ?>




    </div>





    <?php
     include('partials/footer.php');
?>



</body>

</html>