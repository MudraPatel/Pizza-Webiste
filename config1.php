<?php
	
	/*declaration of localhost username password*/
	$host = "localhost";
	$user = "root";
	$pass = "root";
	
	/*connection code to connect to database*/
	$con = mysql_connect("$host", "$user", "$pass");
	
	/*To check connectivity*/
	if(!$con)
		die("unable to connect".mysql_error());
	else
		echo "Connected Successfully";
	
	/*To select database*/
	mysql_select_db("pizza", $con);
	
	/*To insert values*/
	$sql = "INSERT INTO order_item (username, email,phone,address,item,size,drink) VALUES
	('$_POST[username]', '$_POST[email]', '$_POST[phone]','$_POST[address]','$_POST[item]','$_POST[size]','$_POST[drink]')";
	
	/*To check insert query correction*/
	if(!mysql_query($sql, $con))
		echo "Querry is correct";
	else
		echo "".mysql_error();
	
	/*To go to final location after filling form*/
	header("Location:pizza2.html");
	
	/*To close connection*/
	mysql_close("$con");
	
?>