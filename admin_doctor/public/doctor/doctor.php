<?php

    function assignDoctor() {
        $name = $_POST['doctorName'];
        $email = $_POST['doctorEmail'];
        $password = $_POST['doctorPassword'];
        $department = $_POST['department'];
        $phoneNumber = $_POST['doctorPhoneNum'];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "INSERT INTO `doctor` (`email`, `password`, `name`, `phoneNumber`, `department`) VALUES
        ('".$email."', '".$password."', '".$name."', '".$phoneNumber."', '".strtoupper($department)."');";

        mysqli_query($con, $sql);
    }


    function getListOfDoctors() {
        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `doctor`";
        $qry = mysqli_query($con, $sql);
        return $qry;
    }


?>