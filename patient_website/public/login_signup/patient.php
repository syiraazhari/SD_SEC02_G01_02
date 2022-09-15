<?php

session_start();
	require __DIR__.'/PHPMailer/src/Exception.php';
	require __DIR__.'/PHPMailer/src/PHPMailer.php';
	require __DIR__.'/PHPMailer/src/SMTP.php';
	//Import PHPMailer classes into the global namespace
	//These must be at the top of your script, not inside a function
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	//Load Composer's autoloader
	//require 'vendor/autoload.php';

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
			 $_SESSION["email"] = $row['email'];
			 $_SESSION["password"] = $row['password'];
			 
			 if(isset($_SESSION['email']))
	          if(isset($_SESSION['password']))
		   {
			   header("Location:../homepagepatient.html");
			  
		   }
			   
		  }else
			  
		echo '<script>alert("Invalid Username Or Password");
		
		window.location.href="./signPage.html";
		
		
		</script>';
       
	}

	function sendPasswordToEmail() {
		echo "Password sent to email address";

		$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'harrazhaziqazlim@gmail.com';                     //SMTP username
    $mail->Password   = 'nfcyobjnmukmcsua';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('harrazhaziqazlim@gmail.com', 'Mailer');
    $mail->addAddress('amirah.snydex@gmail.com');    //Add a recipient              //Name is optional

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'HALLO';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
	}


  
?>