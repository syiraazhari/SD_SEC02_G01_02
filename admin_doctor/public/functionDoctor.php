<?php
    function addDoctor()
    {
        include "connection.php";
        
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phoneNumber = $_POST['phoneNumber'];
        $department = $_POST['department'];

        $sql = "INSERT INTO doctor(username, email, password, name, phoneNumber, department)
                 VALUES('$username', '$email', '$password', '$name', '$phoneNumber', '$department')";
        mysqli_query($con, $sql);
        
    }

    function getListOfDoctor() {
        include "connection.php";

        $sql = "SELECT * FROM doctor";
        $qry = mysqli_query($con, $sql);
        return $qry;
    }

    function deleteDoctor($username) {
        include "connection.php";

        $sql = "DELETE FROM doctor WHERE username = '".$username."'";
        mysqli_query($con, $sql);
    }

    function getDoctorInfo($username) {
        include "connection.php";
        
        $sql = "SELECT * FROM doctor WHERE username = '".$username."'";
        $qry = mysqli_query($con, $sql);
        return $qry;
    }

    function updateDoctor() {
        include "connection.php";

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $name = $_POST["name"];
        $phoneNumber = $_POST["phoneNumber"];
        $department = $_POST["department"];

        $sql = "UPDATE branch SET username = '".$username."', email = '".$email."', password = '".$password."', name = '".$name."', phoneNumber = '".$phoneNumber."', department = '".$department."' WHERE username = '".$username."'";

        mysqli_query($con, $sql);
    }
?>