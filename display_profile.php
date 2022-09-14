<?php
    session_start();
    require("function.php");
?>

<?php
    if(!isset($_SESSION['username']))
    {
        $patientData = getpatientData(getUsername($_SESSION['username']));
    
?>
<div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-6">
    <h1 class="fw-light font-base fs-6 fs-xxl-7">
        <?php
        echo $patientData['name'];
        ?>
    </h1>
    <p class="fs-1 mb-5">Contact Number: +601 xxx xxx
	<br> E-Mail: xxxxxxx@gmail.com
	<br> Address: xxxxx, xxxxx ,xxxxxx ,xxxxx
	<br> Date Of Birth: xx September 20xx (23 years-old)
	<br> Deparment Of Neurology</p>
				
    <div class="d-grid">
        <a href="../../meinhardt-front-end/public/updateprofilepatient.html"><button class="btn btn-primary rounded-pill" type="submit">Update Profile</button></a>
    </div>
</div>

<?php
    }
    function getUsername($username)
    {
        $q = mysql_query("SELECT 'username' FROM 'patient' where 'name' = '$name'");
        while($r = mysql_fetch_assoc($q))
        {
            return $row['username'];
        }
    }
?>