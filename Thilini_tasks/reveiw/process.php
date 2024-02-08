<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $name  = $_POST['name'];  // Name
    $contactnumber = $_POST['contactnumber'];  // Contact Number
    $email = $_POST['email'];   // Email
    $rateyourexperience = $_POST['rate your experience']; // Customer Experience Rating

    // Include the database connection file
    include 'db.php';

    // Define an SQL query to insert data into the 'customersinfo' table
    $sql = "INSERT INTO customersinfo (name, contactnumber, email, rating)
            VALUES ('$name', '$contactnumber', '$email', '$rating')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>