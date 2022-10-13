<?php
    include "./doctor.php";

    if (isset($_POST['SignInButton'])) {
		addDoctor();
        loginDoctor();
		
    }

   
?>