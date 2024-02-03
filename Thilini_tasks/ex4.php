<?php
$title="ex4";
include "header.php" ?>

<div class="mb-4">
            <h3>If-Else: Voting Eligibility</h3>
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
                $name = $_POST['name'];
                $age = $_POST['age'];

                if ($age >= 18) {
                    echo "<p>$name, you are eligible for voting.</p>";
                } else {
                    echo "<p>$name, you are not eligible for voting.</p>";
                }
            }
            ?>
        </div>


<div class="mb-4">
        <h3>Switch Case: Check if it's August</h3>
        <?php
        $currentMonth = date("F");
        switch ($currentMonth){
        case 'August':
            echo "<p>It's August, so it's still holiday.</p>";
        break;
        default:
            echo "<p>Not August, this is $currentMonth.So I don't have any holidays.</p>";
        }
        ?>
        </div>
 
        <!-- For Loop: Multiplication Table -->
        <div class="mb-4">
            <h3>For Loop: Multiplication Table</h3>
            <?php
            $numberForTable = 5; // Change this to the desired number
            for ($i = 1; $i <= 10; $i++) {
                $result = $numberForTable * $i;
                echo "<p>$numberForTable x $i = $result</p>";
            }
            ?>
        </div>

        <!-- While Loop: Print numbers from 1 to n -->
        <div class="mb-4">
            <h3>While Loop: Print Numbers from 1 to n</h3>
            <?php
            $n = 7; // Change this to the desired number
            $counter = 1;
            while ($counter <= $n) {
                echo "<p>$counter</p>";
                $counter++;
            }
            ?>
        </div>

<!-- Foreach Loop: Print Elements of an Array -->
    <div class="mb-4">
        <h3>Foreach Loop: Print Elements of an Array</h3>
        <?php
        $arrayExample = array("HTML", "CSS", "PHP", "JavaScript");
        foreach ($arrayExample as $element) {
        echo "<p>$element</p>";
        }
        ?>
    </div>

    </div>


















<?php include "footer.php" ?>