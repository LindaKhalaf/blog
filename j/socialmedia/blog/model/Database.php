<?php 
class Database{
	//a class holds the varriables for connection and postings. by creating this class, this can be used a multatude of times so that we dont have to re write code because we create an instance of a object
	//makes all of these varriables private, that mean that it this explains how our class works internally
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;
	public $error;
	//private $date;
	//private $time;


//everything after here is public, which mean that that is what the class does
	public function __construct($host, $username, $password, $database){ //$date, $time){//a function is a set of statements that can be used repeatedly in a program
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;

		$this->connection = new mysqli($host, $username, $password); //calls the varriables from database.php
		if($this->connection->connect_error) {
			die("<p>Error:" . $this->connection->connect_error . "</p>");//lets you know if the connection works
		} 
		$exists = $this->connection->select_db($database);//creates the varriable exhis
		if(!$exists) {
			$query = $this->connection->query("CREATE DATABASE $database");//if connection is working let me know if the database is working
			if($query) {
				echo "<p>Successfully created database: " . $database . "</p>";//echos that the database works
			}		
		} else {
			echo "<p>Database already exhists.</p>";
			}
	}

	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database); //$this->date, $this->time);
		if($this->connection->connect_error) {
			die("<p>Error" . $this->connection->connect_error . "</p>");//lets you know if the connection works
		}
	}

	public function closeConnection(){
		if(isset($this->connection)){//an isset makes it so that the varriable is not null and an actual set value
			$this->connection->close();
		}
	}

	//a public function to open and close the connection
	public function query($string){
		$this->openConnection();
		$query = $this->connection->query($string);
		$this->closeConnection();
		return $query;
	}


}

 ?>