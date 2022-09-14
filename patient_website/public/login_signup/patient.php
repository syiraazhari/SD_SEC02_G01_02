<?php
    function addPatient() {
        $patientName = $_POST['patientName'];
        $patientEmail = $_POST['patientEmail'];
        $patientPassword = $_POST['patientPassword'];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "INSERT INTO patient(name, email, password) VALUES('$patientName', '$patientEmail', '$patientPassword')";

        mysqli_query($con, $sql);
    }

    function loginPatient() {
        $patientEmail = $_POST["loginEmail"];
        $patientPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `patient` WHERE email = '".$patientEmail."' AND password = '".$patientPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../viewprofilepatient.html");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
        }
    }
?>