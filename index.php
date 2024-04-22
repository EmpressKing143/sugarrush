<?php
session_start(); // Start session

// Initialize error messages
$error = array("username" => "", "email" => "", "password" => "");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input
    $username = filter_var(trim($_POST['username'] ?? ''), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $password = filter_var(trim($_POST['password'] ?? ''), FILTER_SANITIZE_STRING);

    // Validate username
    if (empty($username)) {
        $error['username'] = "Username is required";
    }

    // Validate email
    if (empty($email)) {
        $errors['email'] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = "Invalid email format";
    }

    // Validate password
    if (empty($password)) {
        $error['password'] = "Password is required";
    }

    // If no errors, proceed with session storage and redirection
    if (!array_filter($error)) {
        // Store validated and sanitized data in session
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        // Redirect to the next page
        // header("Location: display/displayDetails.php");
        header("Location: loginmodule/addinfo.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php require("loginmodule/head.php"); ?>
<body>
    <?php require("loginmodule/header.php"); ?>
    <div class="container">
        <div class="index-form">
            <h2>Sign Up</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-user" style="color: #485c66;"></i></span>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="error"><?php echo $error['username']; ?></div> <!-- Error message container -->
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-envelope" style="color: #485c66;"></i></span>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="error"><?php echo $error['email']; ?></div> <!-- Error message container -->
                </div>
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-lock" style="color: #485c66;"></i></span>
                        <input type="password" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="error"><?php echo $error['password']; ?></div> <!-- Error message container -->
                </div>
                <button type="submit"> Create Account </button>
            </form>
            <p>Already have an account? <a href="loginmodule/login.php">Login!</a></p>
        </div>
    </div>
</body>
</html>
