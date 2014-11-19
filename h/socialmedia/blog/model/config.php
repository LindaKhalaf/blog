<?php 
	$path = "/socialmedia/blog/"; //keeps us within the folder socialmedia

	$host = "localhost";
	$username = "root";
	$password = "root";
	$database =  "blog_db";

	$connection = new Database($host, $username, $password, $database);//allows us to use the connection here and not haveing to re write it over again
 ?>