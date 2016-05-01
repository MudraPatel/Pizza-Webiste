

<?php
session_start();
$db = "pizza";

$con = mysql_connect("localhost","root","root");

if(!$con)
{
	die( "could not connect to database".mysql_error($con));
 }
else {
echo "Connection Established <br>";
} 

mysql_select_db($db);	

 $uname = "";
 $pwd = "";
 $errorMessage = "";
 $num_rows = 0;
	
  $uname = $_POST['username'];
  $pwd = $_POST['password'];
  
  
  $uname = htmlspecialchars($uname);
  $pwd = htmlspecialchars($pwd);
  
  $sql = "SELECT * from register where username= '$uname' AND password = '$pwd' ";
  
  $result = mysql_query($sql);
  
  if($result)
  {
  		$num_rows = mysql_num_rows($result);
  		if($num_rows > 0)
		{  	
				$_SESSION['login_user']= $uname;
  			$errorMessage = "Logged on";
  			echo "Welcome  ".$uname;
  			echo '<br><a href="logout.php">Logout</a>';
  			header("Location:form1.php");
  		}
  	
  		else
  		{ 
  			$_SESSSION['login_user'] 
  			$errorMessage = "Invalid Logon";
  			echo "Invalid login \n";
  			echo "Invalid username or password";
  			  header("Location:loginnew.php");
  		
  		}
  		}
  else{
  	echo "nothing";}


?>


