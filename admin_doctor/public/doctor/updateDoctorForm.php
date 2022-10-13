<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            body {
                background-color: black;
            }
            form {
                color: white;
                font-family: sans-serif;
                max-width: 400px;
                margin: auto;
            }
            input {
                width: 93%;
                border: 10px solid white;
            }
            h1 {
                color: white;
            }
            select {
                width: 97%;
                height: 40px;
                border-radius: 5px;
            }
            #submit {
                transition: 0.4s;
                background-color: grey;
                height : 30px;
                color: white;
                margin-left: 10px;
                border: none !important;
            }
            #submit:hover {
                background-color: white;
                color: black;
            }
        </style>
    </head>
    <body>
        <?php
            include './doctor.php';

            $doctorEmailToUpdate = $_POST['doctorEmail'];

            $getDoctorInfo = getDoctorInfo($doctorEmailToUpdate);
            $doctorRecord = mysqli_fetch_assoc($getDoctorInfo);

            $doctorEmail = $doctorRecord['email'];

            print_r($doctorRecord);

            echo "
            
            <form method='post' action='./processDoctor.php'>
                <h1>Update Doctor Information</h1>
                <fieldset>
                <p>
                    <input type='text' name='doctorName' value='".$doctorRecord['name']."' required/>
                </p>
                <p>
                    <input type='email' name='doctorEmail' value='".$doctorEmail."' required/>
                </p>
                <p>
                    <input type='password' name='doctorPassword' value='".$doctorRecord['password']."' required/>
                </p>
                <p>
                    <input type='text' name='doctorPhoneNum' value='".$doctorRecord['phoneNumber']."' required/>
                </p>
                <p>
                    <input type='text' name='department' value='".$doctorRecord['department']."' required/>
                </p>
                <p style='padding: 20px'>
                    <input id='submit' type='submit' name='updateDoctor' value='Save'>
                </p>
                </fieldset>
            </form>

            ";
        ?>
    </body>
</html>