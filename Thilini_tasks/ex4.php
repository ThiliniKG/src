<?php
$title="ex4";
include "header.php" ?>

<div class="mb-4">
<h3> 4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, 
    decide if he/she is eligible for voting.</h3>
<form method="POST">
    <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
    <label for="age">Age:</label>
    <input type="number" class="form-control" id="age" name="age" required>
    </div>
    <button type="submit" class="btn btn-primary">Check Eligibility</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST["name"];
        $age = $_POST["age"];

        if ($age >= 18) {
        echo "<p>$name, you are eligible for voting.</p>";
        } else {
        echo "<p>$name, you are not eligible for voting.</p>";
        }
        }
        ?>
        </div>


<div class="mb-4">
<h3> 4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:</h3>
        <?php
        $currentMonth = date("F");
        switch ($currentMonth) {
        case 'August':
        echo "<p>It's August, so it's still holiday.</p>";
        break;
        default:
        echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
        }
        ?>
</div>


 
<h3> 4.4 For Loop: Write a PHP script that will print the multiplication table of a number </h3>
        
<div class="mb-4">
        <form action="" method="post">
        Number:<input type="text"  name="number" placeholder="Enter your number" required><br><br>

        <input type="submit" value="Generate Multiplication Table">
        </form>
        <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["number"];
        echo "<h3>Multiplication Table for $n</h3>";
        for ($i = 1; $i <= 10; $i++) {
        $result = $n * $i;
        echo "$n x $i = $result <br>";
    }
}
?>
<br><br><br>

            
<h3> 4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. </h3>

<hr>
<form action="" method="post">
    <label for="range">Enter a number for the range:</label>
    <input type="number" name="range" required>

    <input type="submit" value="Print Numbers">
    </form>

    <?php
    // While Loop Script
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $range = $_POST["range"];
        echo "<h3>Numbers from 1 to $range</h3>";
        $counter = 1;
        while ($counter <= $range) {
        echo "$counter ";
        $counter++;
        }
        }
        ?>

        <hr>



<h3> 4.6 Foreach Loop:Write a PHP script that will print all the elements of an array.</h3>
    <div class="mb-4">
        
        <?php
        $arrayExample = array("HTML", "CSS", "PHP", "JavaScript");
        foreach ($arrayExample as $element) {
        echo "<p>$element</p>";
        }
        ?>
    </div>

    </div>


















<?php include "footer.php" ?>