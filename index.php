<?php
// session_start(); //hello reynan

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $_SESSION['username'] = $_POST['username'] ?? '';
//     $_SESSION['email'] = $_POST['email'] ?? '';
//     $_SESSION['password'] = $_POST['password'] ?? '';

//     header("Location: loginmodule/addinfo.php");
//     exit;
//}
?>
<!DOCTYPE html>
<html lang="en">
<?php require("loginmodule/head.php"); ?>
<body>
    <?php require("loginmodule/header.php"); ?>
    <div class="container">
        <div class="index-form">
            <h2>Sign Up</h2>
            <form action=" display/displayDetails.php <?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <div class="input-icon">
                        <span class="icon"><i class="fa-solid fa-user" style="color: #485c66;"></i></span>
                        <input type="text" id="username" name="username" placeholder="Username" required>
                    </div>
                </div>
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
                <button type="submit">Create Account</button>
            </form>
            <p>Already have an account? <a href="loginmodule/login.php">Login!</a></p>
        </div>
    </div>
</body>
</html>
