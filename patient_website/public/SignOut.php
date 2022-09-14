<?php
session_start();
	
 echo $_SESSION['Email'];
  session_unset();
  
  If (session_destroy())
  {
	  
	 header("Location:logoutpatients.html");
	  
  };
  
  
  
  
?>