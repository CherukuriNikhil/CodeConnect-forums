<?php
include('connect.php');

$showerror = "false";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    // Check whether email exists
    $existsql = "SELECT * FROM `users` WHERE user_email = '$useremail'";
    $result = mysqli_query($conn, $existsql);
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        $showerror = "Email already in use";
    } else {
        if ($password == $cpassword) {
            $showalert = false;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES ('$username', '$useremail', '$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showalert = true;
                // redirecting
                header("location: /forums/index.php?signupsuccess=true");
                exit(); // It's good practice to exit after a header redirect
            }
        } else {
            $showerror = "Password is not matching";
        }
    }
    header("location: /forums/index.php?signupsuccess=false&error=$showerror");
    exit(); // It's good practice to exit after a header redirect
}
?>
