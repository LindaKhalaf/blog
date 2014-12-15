<?php 
	require_once (__DIR__ . "/../model/config.php");

	$query = $_SESSION["connection"]->query("CREATE TABLE post ("//creates the table "posts", "id", and "title"
		. "id int(11) NOT NULL AUTO_INCREMENT,"//table "id" is auto inremented
		. "title varchar(255) NOT NULL,"//this makes the table "title" and makes it so that information can be stored in it
		. "post text NOT NULL,"
		. "DateTime datetime NOT NULL,"
		. "PRIMARY KEY (id))");//this makes the table "title" and makes it so that information can be stored in it

	if($query){
		//echo "Successfully created table: post ";//yay you created posts
	} else{
		echo '<p>'. $_SESSION["connection"]->error. '</p>';//to let you know what is wrong with your code
		}

	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL," 
		. "email varchar(50) NOT NULL,"
		. "password char(120) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

	if($query){
		echo '<p>Successfully created table: users</p>';
	} else{
		echo '<p>'.  $_SESSION["connection"]->error .'</p>';
	}

//unneeded close, do not use ->
//-> "$connecton->close();""

 ?>