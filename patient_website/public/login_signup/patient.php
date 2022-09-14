<?php
<<<<<<< HEAD
session_start();


=======
>>>>>>> 14d2758319df38cb454674d75e5010cb539a413f
    function addPatient() {
        $patientName = $_POST['patientName'];
        $patientEmail = $_POST['patientEmail'];
        $patientPassword = $_POST['patientPassword'];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

<<<<<<< HEAD
        $sql = "INSERT INTO patient(Name, Email, Password) VALUES('$patientName', '$patientEmail', '$patientPassword')";
=======
        $sql = "INSERT INTO patient(name, email, password) VALUES('$patientName', '$patientEmail', '$patientPassword')";
>>>>>>> 14d2758319df38cb454674d75e5010cb539a413f

        mysqli_query($con, $sql);
    }

<<<<<<< HEAD
    function loginPatient() 
	{
=======
    function loginPatient() {
>>>>>>> 14d2758319df38cb454674d75e5010cb539a413f
        $patientEmail = $_POST["loginEmail"];
        $patientPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

<<<<<<< HEAD
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
		 
	
	     
	
		 
		 
	
		
		
=======
        $sql = "SELECT * FROM `patient` WHERE email = '".$patientEmail."' AND password = '".$patientPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../viewprofilepatient.html");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
        }
>>>>>>> 14d2758319df38cb454674d75e5010cb539a413f
    }
?>