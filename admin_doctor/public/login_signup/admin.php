<?php
    function loginAdmin() {
        $adminEmail = $_POST["loginEmail"];
        $adminPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `admin` WHERE email = '".$adminEmail."' AND password = '".$adminPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../viewprofileadmin.php");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
        }
    }
?>