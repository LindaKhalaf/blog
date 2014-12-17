<?php 
	require_once(__DIR__ . "/../model/config.php");

	function authenticateUser()
	 {
	 	if(!isset($_SESSION["authenticated"])){//this is our isset ot make sure we are an actual user
	 		return false;
	 	}else{
				return true;
		}
 }
	
	 // 
 ?>