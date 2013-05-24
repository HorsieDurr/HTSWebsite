<?php
include '../LoveRain/connect.php';

$Hej=$_POST[myPassword];
$Heej=md5($Hej);
             $query = "INSERT INTO loverain (name, password) VALUES ('$_POST[myUser]', '$Heej')";
             
             $result = mysql_query($query);
             if ($result === false) {
	             echo '<strong> Error when tring to add data to database. ' . mysql_errno . ' : <br />' . mysql_error . '</strong>';
        }
		    header('location: login.html');
		
?>
