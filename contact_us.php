<?php

include './includes/database.php';
$showAlert = false;
$showError = false;

session_start();
$boolLoggedIn = false;
$sessionUsername = "";

// if( isset($_SESSION) and isset($_SESSION["loggedin"]) and isset($_SESSION["username"]) ){
//   $loggedIn = $_SESSION["loggedin"];
//   if($loggedIn){
//     $boolLoggedIn = true;
//     $sessionUsername = $_SESSION["username"];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone_no = $_POST["phone_no"];
        $message = $_POST["message"];
        
        $sql = "INSERT INTO `contact_us` (`name`, `email`, `phone_no` , `message`) VALUES ('$name', '$email', '$phone_no' , '$message');" ;
        $result = mysqli_query($conn, $sql);
            if ($result){
                $showAlert = true;
                header("location: ./index.php");
            }
        }
//   }

// }

// else if(empty($_SESSION["loggedin"]))
// {
//     header("location: signin.php");
//     exit;
// }
