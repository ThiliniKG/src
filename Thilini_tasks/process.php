<?php
//what to do with the form data
$title="Your information";
include "header.php" ?>



$nimi =$_POST ["nimi"];
$email =$_POST ["email"];

echo "Hello" . $nimi .<br>"Your email id is: ".$email;


<?php include "footer.php" ?>