<?php
    function loginDoctor() {
        $doctorEmail = $_POST["doctorEmail"];
        $doctorPassword = $_POST["doctorPassword"];

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");

        $sql = "SELECT * FROM `doctor` WHERE email = '".$doctorEmail."' AND password = '".$doctorPassword."'";
        $qry = mysqli_query($con, $sql);

        if (mysqli_num_rows($qry) > 0) {
            header("Location:../homepagedoctor.html");
        }
        else {
            echo "<script>alert('Invalid parameters');</script>";
            header("Location:../logindoctor.html");
        }
    }

    function sendPasswordToEmail() {

        $patientEmail = $_POST['forgotPasswordEmail'];

        echo $patientEmail;

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "SELECT * FROM `doctor` WHERE Email = '".$doctorEmail."'";
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

    function updateProfile() {

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "UPDATE `doctor` SET `username` = '".$_POST["updateUsername"]."' WHERE `doctor`.`email` = '".$_SESSION["email"]."';";

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "UPDATE `doctor` SET `password` = '".$_POST["updatePassword"]."' WHERE `doctor`.`email` = '".$_SESSION["email"]."';";

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "UPDATE `doctor` SET `address` = '".$_POST["updateAddress"]."' WHERE `doctor`.`email` = '".$_SESSION["email"]."';";

        $con = mysqli_connect("localhost", "web39", "web39", "meinhardt_hospital_appointment");
        $sql = "UPDATE `doctor` SET `phoneNumber` = '".$_POST["updateContactNo"]."' WHERE `doctort`.`email` = '".$_SESSION["email"]."';";

        $qry = mysqli_query($con, $sql);

    }

    function getDoctorList()
    {
        include "connection.php";

        $sql = "SELECT * FROM doctor";
        $qry = mysqli_query($con, $sql);
        return $qry;
    }
?>
