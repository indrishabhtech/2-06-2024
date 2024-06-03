<?php

// Database configuration
$servername = 'localhost';
$username = 'root';
$password = '';
$database = '2-06-2024';

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Get the login credentials from POST request
$email = $conn->real_escape_string($_POST['email']);
$password = $_POST['password'];

// Query to check if the user exists
$sql = "SELECT * FROM logintable WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Start the session and store user information
        session_start();
        $_SESSION['email'] = $email;
        echo 'Login successful! Sab kuch thik hai ';
        // header('Location : dashboard.php');
    } else {
        echo 'Invalid email or password!';
    }
} else {
    echo 'Invalid email or password!';
}

// Close connection
$conn->close();
?>