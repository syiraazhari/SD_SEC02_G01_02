<?php

    include "./doctor.php";

    if (isset($_POST['registerDoctorBtn'])) {
        assignDoctor();
        header('Location:../homepageadmin.html');
    }

    if (isset($_POST['updateDoctor'])) {
        updateDoctor();
        header('Location:./doctorListAdmin.php');
    }

?>