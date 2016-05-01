<?php
$db = "form";

$con = mysql_connect($host  ="localhost", $username = "root",$password = "root");

if(!$con)
{
	die( "could not connect to database".mysql_error($con));
 }
else {
echo "Connection Established <br>";
} 

	mysql_select_db($db);	
	$u = $_POST['username'];	
	$p = $_POST['password'];	
	

//	$sql = "INSERT INTO user values('$u','$p')";		
	//$sql = "DELETE TABLE FROM login WHERE '$u' = 'sneha'";		
	//	$result = mysql_query($sql);
		
		?>