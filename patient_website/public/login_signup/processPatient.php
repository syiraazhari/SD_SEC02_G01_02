<?php
    include "./patient.php";

    if (isset($_POST['registerPatient'])) {
        addPatient();
        header("Location:signPage.html");
    }

    if (isset($_POST['loginPatient'])) {
        loginPatient();
    }

    if (isset($_POST['forgotPasswordEmail'])) {
        sendPasswordToEmail();
    }

    if (isset($_POST['updatePatient'])) {
        updateProfile();
    }


?>