<?php

	function loginDoctor()
	{
		
		echo "hi";
		$doctorUsername =$_POST['DoctorUsername'];
		$doctorPassword =$_POST['DoctorPassword'];
		
		echo $doctorUsername;
		echo $doctorPassword;
		echo $_POST['DoctorUsername'];
		echo $_POST['DoctorPassword'];
		
		
		$con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
		
		if(mysqli_connect_errno())
		{
			
			echo 'Failed Connect database'.mysqli_connect_error();
		}
		
		echo 'Connected';
		
		$sql = "SELECT * FROM `doctor` WHERE username = '".$doctorUsername."' AND password = '".$doctorPassword."'";
        $qry = mysqli_query($con, $sql);
		$row =mysqli_fetch_array($qry);
		  
	  
	    if(mysqli_num_rows($row) > 0)
		  {
            echo 'Login Successfull';
            
            $_SESSION['username'] = $row['username'];
			 $_SESSION["password"] = $row['password'];

             echo '<script type="text/javascript">alert('.$row['username'].');</script>';

             header("Location:../homepagedoctor.php");

			 
			 if(isset($_SESSION['username']))
	          if(isset($_SESSION['username']))
		   {
			   
			  
		   }
			   
		  }
		  
		  else
		  {
			  
		echo '<script>alert("Invalid Username Or Password");
		
		window.location.href="../logindoctor.html";
		
		
		</script>';
		  }
       
	}
		
?>
