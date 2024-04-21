<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_start(); // Start the session if not already started

    // Retrieve basic user information stored in session from index.php
    $username = $_SESSION['username'] ?? '';
    $email = $_SESSION['email'] ?? '';
    $password = $_SESSION['password'] ?? '';

    // Retrieve additional user information from the current form (addinfo.php)
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $birthdate = $_POST['birthdate'] ?? '';
    $address = $_POST['address'] ?? '';
    $contact_number = $_POST['contact_number'] ?? '';

    // Establish a database connection
    $connection = new mysqli('localhost', 'root', '', 'sugarrush');

    // Check connection
    if ($connection->connect_error) {
        die('Connection Failed! ' . $connection->connect_error);
    }

    // Check if email already exists
    $duplicate = $connection->prepare("SELECT * FROM user WHERE email = ?");
    $duplicate->bind_param("s", $email);
    $duplicate->execute();
    $duplicate->store_result();

    if ($duplicate->num_rows > 0) {
        echo "<script>alert('Email is already taken');</script>";
    } else {
        // Insert user data if email is not already registered
        $statement = $connection->prepare("INSERT INTO user (username, email, password, first_name, last_name, birthdate, address, contact_number) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $statement->bind_param("ssssssss", $username, $email, $password, $first_name, $last_name, $birthdate, $address, $contact_number);

        if ($statement->execute()) {
            echo "You have successfully registered! Congratulations!!";
            header("Location: login.php");
            exit(); // Exit after redirect
        } else {
            echo "Error: " . $statement->error;
        }

        $statement->close();
    }

    $connection->close();
}
?>