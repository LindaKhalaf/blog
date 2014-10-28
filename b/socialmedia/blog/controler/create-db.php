<?php 


require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password); //calls the varriables from database.php

if($connection->connect_error) {

die("Error" . $connection->connect_error);//lets you know if the connection works
} else{

	echo "Success: " . $connection->host_info;// echos that it works
}

$exists = $connection->select_db($database);


if($exists){

	$query = $connection->query("CREATE DATABASE $database");//if connection is working let me know if the database is working

	if($query){
		
	}
	else{
		
		echo "Successfully created database: " . $database;//echos that the database works
	}
}

//unneeded close, do not use ->
//-> "$connecton->close();""

 ?>