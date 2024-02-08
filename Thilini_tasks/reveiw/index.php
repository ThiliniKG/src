<?php
$title="create data";
include '../header.php';    
?>

<h2>Hot Pot Restaurant Customer Review Form:</h2>
<form name="review form" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter your Name" name="name" required>
            </div>
            <div class="col">
                <label for="addresscontact number">Contact Number:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter your Contact Number" name="Contact Number" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="Email" placeholder="Enter your Email" name="Email" required>
            </div>
            <div class="col">
                <label for="Rate Your Experience">Rate Your Experience:</label>
                <select class="form-control" id="Rate Your Experience" name="Rate Your Experience">
                    <option value="1">Excelent</option>
                    <option value="2">Very Good</option>
                    <option value="3">Satisfied</option>
                    <option value="4">Average</option>
                    <option value="5">Bad</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<h2>Please provide any additional comments or feedback to improve our services:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="comments">Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Comment/Feedback" name="Comment/Feedback" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<h2>Thank you for taking the time to provide your feedback! 
    We greatly appreciate your input and hope to welcome you back soon.</h2>









<?php
$title="create data";
include '../footer.php';    
?>