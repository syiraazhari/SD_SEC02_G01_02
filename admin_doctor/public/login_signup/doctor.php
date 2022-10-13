<?php
session_start();
echo "Session started";

include "functionDoctor.php";

    function loginDoctor() {
		
        $doctorId = $_POST["SignInDoctorId"];
        $doctorPassword = $_POST["SignInDoctorPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `doctor` WHERE username = '".$doctorId."' AND password = '".$doctorPassword."'";
        $qry = mysqli_query($con, $sql);

         if(mysqli_num_rows($qry) > 0)
		  {
            
            
            $_SESSION['username'] = $row['username'];
			 $_SESSION["password"] = $row['password'];

             echo '<script type="text/javascript">alert('.$row['username'].');</script>';

           
			 
			 if(isset($_SESSION['username']))
	          if(isset($_SESSION['password']))
		   {
			   header("Location:../homepagedoctor.html");
			  
		   }
			   
		  }else
			  
		echo '<script>alert("Invalid Username Or Password");
		
		window.location.href="./logindoctor.html";
		
		
		</script>';
    }

 ?>