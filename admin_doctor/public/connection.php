<?php
	$conn=mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
	
	if(!$conn)
	{
		die("Error. Failed to connect to database.");
	}
?>