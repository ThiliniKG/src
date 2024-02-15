<?php
include '../header.php';  
include 'db1.php';
// SQL query to retrieve data from the 'studentsinfo' table
$sql = "SELECT * FROM customersinfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>reviewid</th>
                    <th>Name</th>
                    <th>phonenumber</th>
                    <th>email</th>
                    <th>rating</th>
                    <th>comments</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['reviewid']}</td>
                <td>{$row['name']}</td>
                <td>{$row['phone_number']}</td>
                <td>{$row['email']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['comments']}</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No results";
}
// close the connection when done
$conn->close();
include '../footer.php'; 
?>