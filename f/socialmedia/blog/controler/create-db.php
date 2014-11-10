<?php 
	require_once (__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password); //calls the varriables from database.php

	if($connection->connect_error) {
		die("<p>Error" . $connection->connect_error . "</p>");//lets you know if the connection works
	} /*else{
		echo "Success: " . $connection->host_info;// echos that it works
	}*/

	$exists = $connection->select_db($database);//creates the varriable exhis

	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");//if connection is working let me know if the database is working
		if($query) {
			echo "<p>Successfully created database: " . $database . "</p>";//echos that the database works
		}		
	} else {
		echo "<p>Database already exhists.</p>";
		}

	$query = $connection->query("CREATE TABLE post ("//creates the table "posts", "id", and "title"
		. "id int(11) NOT NULL AUTO_INCREMENT,"//table "id" is auto inremented
		. "title varchar (255) NOT NULL,"//this makes the table "title" and makes it so that information can be stored in it
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");//this makes the table "title" and makes it so that information can be stored in it

	if($query){
		echo "Successfully created table: post ";//yay you created posts
	} else{
		echo "<p>$connection->error</p>";//to let you know what is wrong with your code
	}

//unneeded close, do not use ->
//-> "$connecton->close();""

 ?>