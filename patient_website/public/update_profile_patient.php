<?php
    function updatePatient()
    {
        include "connection.php";

        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $phoneNumber = $_POST["phoneNumber"];

        $sql = "UPDATE patient SET username = '".$username."', email = '".$email."', password = '".$password."', phoneNumber = '".$phoneNumber."' WHERE username = '".$username."'";

        mysqli_query($con, $sql);
    }
?>