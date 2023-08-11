<?php



include('connect.php');

$showerror = "false";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['usermail'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM users WHERE  user_email = '$email' " ;
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);

    if($num == 1){
         $row = mysqli_fetch_assoc($result);
        if(password_verify($pass,$row['user_password'])){
               session_start();
               $_SESSION['loggedin'] = true ;               
               $_SESSION['useremail'] = $email ;
               $_SESSION['username'] = $row['user_name'];
            //    $_SESSION['sno'] = $row['user_id'];
            //    echo "logged in". $email;
               header("location: /forums/index.php"); 
               exit();     
        }
        else{
            $showerror = "Password Does Not Match";
            header("location: /forums/index.php?loginsuccess=false&error=$showerror");
            exit();
        }
    }else{
        $showerror = "Invalid Credentials";
        header("location: /forums/index.php?loginsuccess=false&error=$showerror");
        exit();
    }


}