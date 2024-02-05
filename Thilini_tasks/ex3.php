<?php
$title="ex3";
include "header.php" ?>


<h1> 3.1 Create a file (ex3.php): Create a file named ex3.php in your exercise folder. 
    Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.
</h1>




<h2> 3.2 Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to 
    print “Hello [Firstname] [Lastname], You are welcome to my site".inside an h3.”</h2>

<form method="post" action= "process.php">

FirstName:<input type="text"  name="firstName" placeholder="Enter your first name" required><br><br>

Lastname:<input type="text"  name="lastName" placeholder="Enter your last name" required><br><br>      

<button type="submit" class="btn btn-primary">Submit</button>

</form>

<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    echo "<h3>Hello $firstName $lastName, You are welcome to my site.</h3>";
    }
    ?>
<br>
<br>
<br>


<body>


<h4>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.
</h4>
<table class="table table-bordered">

    <thead class="thead-dark">

        <tr>
            <th scope="col">Number</th>
            <th scope="col">Name</th>
            <th scope="col">Grade</th>
        </tr>
        </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Alice</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Bob</td>
                    <td>5</td>
                </tr>
            </tbody>
        </table>
<br><br><br>

<h4>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). 
    Join them together and print the length of the string.</h4>

    <?php
$str1 = "Hello";
$str2 = "World";
$combinedString = $str1 . " " . $str2;
echo "<h3>Combined String: $combinedString</h3>";
echo "<p>Length of the String: " . strlen($combinedString) . "</p>";
?>
<br><br><br>

<h4> 3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.
</h4>
<?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<h4>Sum of the Numbers: $sum</h4>";
    ?>

<h4> 3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages.
     Hint: Use predefined variables: $_SERVER).
</h4>

<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<h3>Your Browser: $browser</h3>";
    ?>
   <br>
   <br>
   <br>

<h4> 3.8 File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. 
</h4>



 
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>

 
























<?php include "footer.php" ?>