<?php
    include "./admin.php";

    if (isset($_POST['LoginAdminButton'])) 
	{
        loginAdmin();
    }
	 if (isset($_POST['forgotPasswordEmail'])) {
        sendPasswordToEmail();
    }

    if (isset($_POST['updateAdmin'])) {
        updateProfile();
    }



?>