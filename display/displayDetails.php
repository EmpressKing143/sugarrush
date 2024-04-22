<?php 
    session_start();
    $username = $_SESSION['email'] = $_POST['username'];
    $email = $_SESSION['email'] = $_POST['email'];
    $password = $_SESSION['password'] = $_POST['password'];

    function showDetails() {
        if (!$username = " "){
            $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
            echo $username."<br>";
        } else {
            echo " The username is empty". "<br>";
        }
        
        $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
        if ($email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo $email."<br>";
        } else {
            echo "The email is invalid"."<br>";
        }
        
        $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
        if ($password = " "){
            echo "The password is empty"."<br>";
        } else {
            echo $password."<br>";
        }
        }
            
        
?>




<a href="../index.php"> Go Back </a>