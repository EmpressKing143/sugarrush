<?php
require_once('../databaseconn/credential.php');

// Initialize error message variable
$error_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["email"]) && isset($_GET["password"])) {
    // Retrieve user input from URL parameters
    $email = $_GET["email"];
    $password = $_GET["password"];

    // Establish a database connection using credentials from credentials.php
    $connection = new mysqli("localhost", 'root', "", "sugarrush");

    // Check connection
    if($connection->connect_error){
        die('Connection Failed! '.$connection->connect_error); 
    } 

    // Prepare SQL statement to check if the user exists
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
    
    // Prepare and bind parameters
    $statement = $connection->prepare($sql);
    $statement->bind_param("ss", $email, $password);
    
    // Execute the statement
    $statement->execute();

    // Fetch result
    $result = $statement->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        // User exists, redirect to home page or perform further actions
        header("Location: ../main/home.php");
        exit();
    } else {
        // User does not exist, set error message
        $error_message = "Invalid email or password";
    }

    // Close the statement and connection
    $statement->close();
    $connection->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require("head.php"); ?>
<head>
    <link rel="stylesheet" href="../css/font-awesome-pro-main/fontawesome-pro-6.5.1-web/css/all.min.css">
</head>
<body>
    <?php require("header.php"); ?>
    <div class="container">
        <div class="index-form">
            <h2>Log In</h2>
            <?php if(!empty($error_message)) { ?>
                <p style="color: red;"><?php echo $error_message; ?></p>
            <?php } ?>
            <form method="get">
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-envelope" style="color: #485c66;"></i></span>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-lock" style="color: #485c66;"></i></span>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                </div>
                <button type="submit">Continue</button>
            </form>
            <p>Don't have an account? <a href="../index.php">Signup!</a></p>
        </div>
    </div>
</body>
</html>
