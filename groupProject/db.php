<?php
$servername = "web-dev-env-main-db-1";  // sometimes it can be "shell.hamk.fi"
$username = "hotPotGroup17"; // using root and pasword as password is not good
$password = "hotpot";
$dbname = "hotPotGroup17";

// creating database connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection
if($conn->connect_error){
    die("Connection Failed:" . $conn->connect_error);
}

?>