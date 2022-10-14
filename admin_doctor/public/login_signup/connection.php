<?php
    $con = mysqli_connect("localhost","web39","web39","meinhardt_hospital_appointment");

    // Check connection
    if (!$con)
    {
        die("Error. Unable to connect to database.");
    }
?>