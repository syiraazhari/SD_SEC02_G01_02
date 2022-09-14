<?php
    function loginDoctor() {
        $doctorEmail = $_POST["loginEmail"];
        $doctorPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `doctor` WHERE email = '".$doctorEmail."' AND password = '".$doctorPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../viewprofiledoctor.php");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
        }
    }
?>