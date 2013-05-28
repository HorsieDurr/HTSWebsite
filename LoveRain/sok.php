<?php
include '../LoveRain/connect.php';
session_start();
if(!isset($_SESSION['session_user'])){
	header('Location: login.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="sv" lang="sv">    
    <head>
        <meta http-equiv="Content-Type" content="text/html charset=utf-8" />
        <link rel="stylesheet" title="magnum" type="text/css" href="../CSS/jonas.css" />
		<link rel="alternate stylesheet" title="none" type="text/css" href="../CSS/empty.css.css" />	  
        <title>사랑비</title>	
    </head>
    <body>
        <div id="content">
            <div id="top">
               <div id="banner" ></div>
<img src="header1.jpg" alt="some_text" width="995" height="325">
            </div>
            <div id="left">
					<div class="dokument-item">
						<br/>
					</div>
            </div>
            <div id="center">

<div class="meny">
<ul>
<li><a href="index.html">Start</a></li>
<li><a href="characters.html">Karaktärer</a></li>
<li><a href="Soundtrack.html"> Soundtrack</a></li>
<li><a href="sok.php"> Sök</a></li>
</ul>
</div>
				
                <div id="info">

				<h1 class="dokument-item-header"><h1>
				<h3 class="info"><h3>
				<h5 class="plot">
				<form action="sok.php" method="post" > 
				
<p id = "infoSok">Sök på användarnamn! <br />

<input name="soktAnv" id="soktAnv" type="text" value="" /> <input id="btnSok" type="submit" value="S&ouml;k" /> 

</p>

</form>

<br /><br />


<?php
if (isset($_POST['soktAnv'])) {
$soktVar = $_POST['soktAnv'];



$soktVar = stripslashes($soktVar);
$soktVar = mysql_real_escape_string($soktVar);


$query = "SELECT name FROM loverain WHERE name = '$soktVar' OR name LIKE '%$soktVar%'";

$result = mysql_query($query);
if ($result === false) {
echo "<strong> Error when you asked a question to your databas. " . mysql_errno . " : <br />" . mysql_error . "</strong>";
}
$num=mysql_numrows($result);
if($num==0) {
echo '<p id="txtSok">Finns ingen sån användare <br /> S&ouml;k p&aring; en annan anv&auml;ndare.</p>';
}
else {

for ($i=0;$i<$num;$i++) {
$temp = mysql_fetch_array($result);

echo $temp['name'] . "<br />";
}

}
}
?>
</div>
</div>
            <div id="right">
			
            </div>

			<div id="footer">
				<p> &copy; 2013 Jonas Olsen. 
				</p>
			</div>
        </div>
    </body>
</html>