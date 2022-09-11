<?php
	include 'connection.php';
	session_start();
	
	if(isset($_POST['update']))
	{
		$contactNo = $_POST['contactNo'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$address = $_POST['address'];
		
		$select = "SELECT * from patient where username='$username'";
		$sql = mysqli_query($conn, $select);
		$row = mysqli_fetch_assoc($sql);
		
		$update = "UPDATE 'patient' set 'phoneNumber' = '$contactNo', 'email' = '$email', 'password' = '$password', 'address' = '$address' where username = '$username'";
		$sql12 = mysqli_query($conn,$update);
		
		if($sql12)
		{
			/*successful*/
			header('location: viewprofileadmin.html');
		}
		else
		{
			/*unsuccessful*/
			header('updateprofileadmin.html');
		}
		
	}
?>