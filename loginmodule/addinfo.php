<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];

    $_SESSION['first_name'] = $first_name;
    $_SESSION['last_name'] = $last_name;
    $_SESSION['birthdate'] = $birthdate;
    $_SESSION['address'] = $address;
    $_SESSION['contact_number'] = $contact_number;

    $connection = new mysqli('localhost', 'root', '', 'sugarrush');

    if($connection->connect_error){
        die('Connection Failed! '.$connection->connect_error); 
    } 

    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];

    $sql = "INSERT INTO user (username, email, password, first_name, last_name, birthdate, address, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $statement = $connection->prepare($sql);
    $statement->bind_param("ssssssss", $username, $email, $password, $first_name, $last_name, $birthdate, $address, $contact_number);
    
    $statement->execute();

    $statement->close();
    $connection->close();

    header("Location: ../main/home.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head><link rel="icon" type="image" href="../image/icon.png"></head>
<?php require("head.php"); ?>
<body>
    <?php require("header.php"); ?>
    <div class="container">
        <h2>Personal Information</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="name">
                <input id="first_name" name="first_name" placeholder="First Name" required>
            </div>
            <div class="name1">
                <input id="last_name" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="date" id="birthdate" name="birthdate" placeholder="Birthdate" required>
            </div>
            <div class="form-group">
                <input type="text" id="address" name="address" placeholder="Address" required>
            </div>
            <div class="form-group">
                <input type="tel" id="contact_number" name="contact_number" placeholder="Contact Number" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
