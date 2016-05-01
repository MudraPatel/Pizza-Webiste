<?php


 $db = "form";

$con = mysql_connect($host ="localhost", $username = "root",$password = "root");

if(!$con)
{
	die( "could not connect to database".mysql_error($con));
 }
else {
echo "Connection Established <br>";
} 

mysql_select_db($db);	
	
	if(!$db)
	{
		die("Error connection to database".mysql_error($con));	
	}
	
	 include("menu.php");

 $uname = "";
 $pwd = "";
 $errorMessage = "";
 $num_rows = 0;
	
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  
  $uname = htmlspecialchars($uname);
  $pwd = htmlspecialchars($pwd);
  
  $sql = "SELECT * FROM login WHERE username = '$uname' AND password = '$pwd' ";
  
  $result = mysql_query($sql);
  
  if($result)
  {
  		$num_rows = mysql_num_rows($result);
  		if($num_rows > 0)
		{  			
  			$errorMessage = "Logged on";
  			echo "Welcome ".$uname;
  		}
  		
  		
  		else
  		{ 
  			$errorMessage = "Invalid Logon";
  			echo "Invalid login \n";
  			echo "Invalid username or password";
  		
  		}
  		}
  else{
  	echo "nothing";}

