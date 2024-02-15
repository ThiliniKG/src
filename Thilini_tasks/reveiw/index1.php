<?php
$title="Customer Review Form";
include '../header.php';    
?>

<!DOCTYPE html>
<html>
<head>
    <title>Customer Review Form</title>
</head>
<body>

<h2>Customer Review Form</h2>

<form action="insert_customer.php" method="post">
    <?php
    $fields = array(
        "Name" => "name",
        "Phone Number" => "phone_number",
        "Email" => "email",
        "Rating" => "rating",
        "Comments:<h3></Comments:h2>Please provide any additional comments or feedback to improve our services" => "comments",
        );

    foreach ($fields as $label => $name) {
        echo "<label for='$name'>$label:</label><br>";

        // Check if current field is "Rating"
        if ($name == "rating") {
        echo "<select id='rating' name='rating' required>";
        echo "<option value='5'>Excellent</option>";
        echo "<option value='4'>Very Good</option>";
        echo "<option value='3'>Good</option>";
        echo "<option value='2'>Fair</option>";
        echo "<option value='1'>Poor</option>";
        echo "</select><br><br>";
      } else {
       echo "<input type='text' id='$name' name='$name' required><br><br>";
    }
}
    ?>






    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<h2>Thank you for taking the time to provide your feedback! 
    We greatly appreciate your input and hope to welcome you back soon.</h2>



</body>
</html>

<?php
$title="create data";
include '../footer.php';    
?>





















