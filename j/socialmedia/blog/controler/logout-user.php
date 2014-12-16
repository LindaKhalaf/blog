<?php 
	require_once(__DIR__ . "/../model/config.php");

	unset($_SESSION["authenticated"]);//unsert our isset

	session_destroy();//ends the session

	header("Location: " . $path . "index.php");//brings us back to index
 ?>