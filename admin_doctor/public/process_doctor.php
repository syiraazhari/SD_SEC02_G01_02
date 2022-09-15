<?php
    include "./functionDoctor.php";

    if (isSet($_POST['addDoctor'])) {
        addDoctor();
        header("Location:DoctorList.php");
    }
    else if (isSet($_POST['updateDoctor'])) {
        updateDoctor();
        header("Location:doctorList.php");
    }
    else if (isSet($_POST['doctorToDelete'])) {

        // delete all selected branches
        foreach ($_POST['doctorIdToDelete'] as $username)
            deleteDoctors($username);

        header("Location:doctorList.php");
    }

    // if all else fails, do no operation and return to the branch list page
    // this is to handle the case of an empty assoc array of branchIdToDelete
    header("Location:branchList.php");
?>