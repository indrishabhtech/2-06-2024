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

echo 'Connected successfully';

// Get the form data
$first_name = $conn->real_escape_string($_POST['first_name']);
$last_name = $conn->real_escape_string($_POST['last_name']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// SQL query for record insertion
$sql = "INSERT INTO logintable (`first_name`, `last_name`, `username`, `email`, `password`) VALUES ('$first_name', '$last_name', '$username', '$email', '$password')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Your Form Submitted Successfully!</strong>
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>