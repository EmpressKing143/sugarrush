<?php 
    session_start();
    $username = $_SESSION['email'] = $_POST['username'];
    $email = $_SESSION['email'] = $_POST['email'];
    $password = $_SESSION['password'] = $_POST['password'];
?>

<?php 
if isset($username){
$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    echo $username."<br>";
} else {
    echo " The username is empty". "<br>";
}
    echo $email."<br>";
echo $password."<br>";
?>


<a href="../index.php"> Go Back </a>