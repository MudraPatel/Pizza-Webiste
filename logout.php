<?php
session_start();

echo $_SESSION['login_user']." has succesfully logged out";

session_destroy();
header ('location:login.html');
?>

