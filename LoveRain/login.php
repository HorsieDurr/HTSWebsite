<!-- Kom ihåg att logga in till databasen först! -->
<?php

include '../LoveRain/connect.php';

$Hej=$_POST[myPassword];
$Heej=md5($Hej);

         $query = "SELECT name FROM loverain WHERE name='$_POST[myUser]' AND password='$Heej'";
         //echo '<em> ' . $query . ' </em>';
         $result = mysql_query($query);
         if (mysql_numrows($result) == 1) {
		      session_start();
		      $_SESSION['session_user']=$_POST[myUser];
			  header('Location: index.php');
		 }
		 else {
			  header('Location: login.html');
		 }
		
?>