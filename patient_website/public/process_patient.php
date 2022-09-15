<?php
    include "./update_patient.php";

    if (isSet($_POST['addBranch'])) {
        addBranch();
        header("Location:branchList.php");
    }
    else if (isSet($_POST['updateBranch'])) {
        updateBranch();
        header("Location:branchList.php");
    }
    else if (isSet($_POST['branchIdToDelete'])) {

        // delete all selected branches
        foreach ($_POST['branchIdToDelete'] as $branchId)
            deleteBranches($branchId);

        header("Location:branchList.php");
    }

    // if all else fails, do no operation and return to the branch list page
    // this is to handle the case of an empty assoc array of branchIdToDelete
    header("Location:branchList.php");
?>