<?php 
	//echo $_GET["url"];
	session_start();
	define("BASE_URL","http://localhost/test");
	require_once "./mvc/Brigde.php";
	$myApp=new App();
?>