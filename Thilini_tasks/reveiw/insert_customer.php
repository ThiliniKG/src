<?php
// Database connection
$servername = "web-dev-env-main-db-1";
$username = "root"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "ProjectHotPot"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$comments = $_POST['comments'];

// SQL query to insert data into customersinfo table
$sql = "INSERT INTO customersinfo (name, phone_number, email, rating,comments) 
        VALUES ('$name', '$phone_number', '$email', '$rating','$comments')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>