<?php
$title="Exercise 7: CRUD APP-Thilini";
include 'header.php';
?>

<h2>Input Your Information Below:</h2>
<form
name="form1" method="post" action="process1.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="fname">First Name:</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter your first name" name="fname" required>
            </div>
            <div class="col">
                <label for="lname">Last Name:</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter your last name" name="lname" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            </div>
    
    <div class="col">
    <label for="groupid">Group ID:</label>
    <button class="btn btn-primary dropdown-toggle" type="button"  data-bs-toggle="dropdown" aria-expanded="false">
      Dropdown button
    </button>
    <ul class="dropdown-menu" aria-labelledby="">
      <li><a class="BBCAP19" href="#">BBCAP19</a></li>
      <li><a class="BBCAP20" href="#">BBCAP20</a></li>
      <li><a class="BBCAP21" href="#">BBCAP21</a></li>
      <li><a class="Others" href="#">Others</a></li>
    </ul>
    </div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<h3>List of Tasks</h3>
                <ul>
                    <li><a href="updatesingle.php" style="color:red;"> Update Data</a> </li> 
                    <li><a href="read.php" style="color:red;"> Read Data</a> </li>
                </ul>
<?php

include 'footer.php';    
?>