<?php

$servername="web-dev-env-main";
$username="thilini";
$password="damkum@211";
$dbname="thilini";

// create database connection
$conn=new mysqli($servername,$username,$password,$dbname);

//check connection
if ($conn->connect_error){
    die("connection Failed:".$conn->connect_error);
}


?>