<?php
$title="ex3:Variable, Strings & Operators";
include "header.php" ?>

<h1> 3.2 Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to 
    print “Hello [Firstname] [Lastname], You are welcome to my site".inside an h3.”</h1>

<form method="post" action= <?php htmlspecialchars($_SERVER["PHP_SELF"]);?>>

FirstName:<input type="text"  name="firstName" placeholder="Enter your first name" required><br><br>

Lastname:<input type="text"  name="lastName" placeholder="Enter your last name" required><br><br>      

<button type="submit" class="btn btn-primary">Submit</button>

</form>







<?php include "footer.php" ?>