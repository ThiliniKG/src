<?php
$title="ex2";
include "header.php" ?>

<h2>About us</h2>

<script>
    //this is a comment
 document.write   ("Hello world")

 // triggering an alert box
 windows.alert("This is an alert box")

</script>

<noscript>
if javascript is not enabled this will be displayed so users know they need to enable js.
</noscript>

<script>
    //document.writw but after loading the page

    function hello(){ 

    document.write("This is after the page has loaded")

    }
</script>


<button onclick="document.write('This is something')">click me</button>



<?php include "footer.php" ?>