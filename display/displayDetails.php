<?php 
    session_start();
    $username = $_SESSION['email'] = $_POST['username'];
    $email = $_SESSION['email'] = $_POST['email'];
    $password = $_SESSION['password'] = $_POST['password'];
?>

<?php 
if (empty($username)){
    echo " The username is empty". "<br>";
} else {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    echo $username."<br>";
}
$email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
if ($email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo $email."<br>";
} else {
    echo "The email is invalid"."<br>";
}
    echo $password."<br>";
?>


<a href="../index.php"> Go Back </a>