<?php
    include "./doctor.php";

    if (isset($_POST['loginDoctor'])) {
        loginDoctor();
    }

    if (isset($_POST['forgotPasswordEmail'])) {
        sendPasswordToEmail();
    }

    if (isset($_POST['updateDoctor'])) {
        updateProfile();
    }

?>