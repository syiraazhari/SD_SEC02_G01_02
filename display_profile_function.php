<?php

require("connection.php");

function getpatientData($username)
{
    $array = array();
    $q = mysql_query("SELECT * FROM 'patient' WHERE 'username' = '$username'");
    while($row = mysql_fetch_assoc($q))
    {
        $array['$username'] = $r['$username'];
        $array['$email'] = $r['$email'];
        $array['$password'] = $r['$password'];
        $array['$name'] = $r['$name'];
        $array['$address'] = $r['$address'];
        $array['$phoneNumber'] = $r['$phoneNumber'];
        $array['$age'] = $r['$age'];
        $array['$gender'] = $r['$gender'];
    }
    return $array;
}

    function getUsername($username)
    {
        $q = mysql_query ("SELECT 'username' FROM 'patient' WHERE 'username' = '$username'") ;
        while($r = mysql_fetch_assoc($q))
        {
            return $r['username'];
        }
    }

?>