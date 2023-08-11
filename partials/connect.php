<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "codeconnect";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    echo ("we are checking on it" .mysqli_connect_error($conn));
}

?>