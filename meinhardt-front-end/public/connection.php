<?php
	$conn=mysqli_connect("localhost", "root", "", "meinhardt_hospital_appointment");
	
	if(!$conn)
	{
		die("Error. Failed to connect to database.");
	}
?>