<?php
	include 'connection.php';
	session_start();
	
	if(isset($_POST['updatePatient']))
	{
		$contactNo = $_POST['contactNo'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		
		$select = "SELECT * from patient where email = '$email'";
		$sql = mysqli_query($conn, $select);
		$row = mysqli_fetch_assoc($sql);
		
		$res = $row['email'];
		if($res === $email)
		{
			$update = "UPDATE 'patient' SET 'phoneNumber' = '$contactNo', 'username' = '$username', 'password' = '$password', 'address' = '$address' WHERE email = '$email'";
			$sql12 = mysqli_query($conn, $update);

			if($sql12)
			{
				/*successful*/
				header('location:viewprofilepatient.html');
			}
			else
			{
				/*unsuccessful*/
				header('location:updateprofilepatient.html');
			}
		}
		else
		{
			/*username doesnt match*/
			header('location:updateprofilepatient.html');
		}
		
	}
?>