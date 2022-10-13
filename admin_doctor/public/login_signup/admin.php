<?php
    function loginAdmin() {
        $adminUsername = $_POST["loginUsername"];
        $adminPassword = $_POST["loginPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `admin` WHERE username = '".$adminUsername."' AND password = '".$adminPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../homepageadmin.html");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
        }
    }

    function sendPasswordToEmail() {

        $patientEmail = $_POST['forgotPasswordEmail'];

        echo $patientEmail;

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "SELECT * FROM `admin` WHERE Email = '".$adminEmail."'";
        $qry = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($qry);
	
        echo "Password sent to email address";

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'meinhardt.hospital@gmail.com';                     //SMTP username
            $mail->Password   = 'tobecwuyasolfygr';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('meinhardt.hospital@gmail.com', 'Mailer');
            $mail->addAddress($patientEmail);    //Add a recipient              //Name is optional

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Password Request';
            $mail->Body    = '<p>Here is your password: '.$row['Password'].'</p><p>For your safety, please change your password.</p>';

            $mail->send();
            echo 'Message has been sent';

            header("Location:./passwordSent.html");
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
	}
?>