<?php 


require_once (__DIR__ . "/../model/database.php");

$connection = new mysqli($host, $username, $password); //calls the varriables from database.php

if($connection->connect_error) {

die("<p>Error" . $connection->connect_error . "</p>");//lets you know if the connection works
} /*else{

	echo "Success: " . $connection->host_info;// echos that it works
}*/

$exists = $connection->select_db($database);//creates the varriable exhis


if(!$exists){

	$query = $connection->query("CREATE DATABASE $database");//if connection is working let me know if the database is working

	if($query){
		echo "<p>Successfully created database: " . $database . "</p>";//echos that the database works
	}
}
	else{
		
		echo "<p>Database already exhists.</p>";
	}


	$query = $connection->query("CREATE TABLE posts ("
	. "id int(11) NOT NULL AUTO_INCREMENT,"
	. "title varchar (255) NOT NULL,"
	. "post text NOT NULL,"
	. "PRIMARY KEY (id))");

	if($query){

		echo "Successfully created table: posts ";
	} else{

		echo "<p>$connection->error</p>";
	}

//unneeded close, do not use ->
//-> "$connecton->close();""

 ?>