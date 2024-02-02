<?php
$title="Your information";
include "header.php" ?>

//what to do with the form data

$nimi =$_post ["nimi"];
$email =$_post ["email"];

echo "Hello" . $nimi ."<br>Your email id is: ".$email;


<?php include "footer.php" ?>