<?php
session_start();
if(!isset($_SESSION["email"]))
{
	header("Location:login.php");
	die();
}
else
{
	//Remove existing session
	unset($_SESSION["email"]);
	unset($_SESSION["usertype"]);
	session_destroy();
	header("Location:new folder/index.php");
	die();
}
?>