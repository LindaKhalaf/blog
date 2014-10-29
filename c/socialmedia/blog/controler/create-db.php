<?php 


require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password); //calls the varriables from database.php

if($connection->connect_error) {

die("Error" . $connection->connect_error);//lets you know if the connection works
} else{

	//echo "Success: " . $connection->host_info;// echos that it works
}

$exists = $connection->select_db($database);//creates the varriable exhis


if(!$exists){//DO NOT PUT IN THE !

	$query = $connection->query("CREATE DATABASE $database");//if connection is working let me know if the database is working

	if($query){//if you want "else" working, put in the ! if you wan tthe "if" qorking take out the !
		echo " Successfully created database: " . $database;//echos that the database works
	}
}
	else{
		
		echo " Database already exhists.";
	}

	$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) AUTO_INCREMENT,"
	. "title varchar (255) NOT NULL"
	. "post text NOT NULL"
	. "PRIMARY KEY (id))");

	if($query){

		echo "Successfully created table: posts";
	}

//unneeded close, do not use ->
//-> "$connecton->close();""

 ?>