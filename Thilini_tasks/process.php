<?php
$title="Your Information";
include "header.php" ?>


<?php



// PHP code to handle form submission and display the greeting

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
    }
    ?>
<br>
<br>
<br>










<?php include "footer.php" ?>