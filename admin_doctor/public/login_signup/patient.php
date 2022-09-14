<?php

session_start();


    function addPatient() {
        $patientName = $_POST['patientName'];
        $patientEmail = $_POST['patientEmail'];
        $patientPassword = $_POST['patientPassword'];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");


        $sql = "INSERT INTO patient(Name, Email, Password) VALUES('$patientName', '$patientEmail', '$patientPassword')";



        mysqli_query($con, $sql);
    }


    function loginPatient() {

        $patientEmail = $_POST["loginEmail"];
        $patientPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `patient` WHERE Email = '".$patientEmail."' AND Password = '".$patientPassword."'";
        $qry = mysqli_query($con, $sql);
		$row =mysqli_fetch_array($qry);
		  
		  
		  
		   
		  if(mysqli_num_rows($qry) > 0)
		  {
			 $_SESSION["Email"] = $row['Email'];
			 $_SESSION["Password"] = $row['Password'];
			 
			 if(isset($_SESSION['Email']))
	          if(isset($_SESSION['Password']))
		   {
			   header("Location:../homepagepatient.html");
			  
		   }
			   
		  }else
			  
		echo '<script>alert("Invalid Username Or Password");
		
		window.location.href="./signPage.html";
		
		
		</script>';
       
	}


  
?>