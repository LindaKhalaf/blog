<?php 
class Database{
	//a class holds the varriables for connection and postings. by creating this class, this can be used a multatude of times so that we dont have to re write code because we create an instance of a object
	//makes all of these varriables private, that mean that it this explains how our class works internally
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

//everything after here is public, which mean that that is what the class does
	public function __construct($host, $username, $password, $database){//a function is a set of statements that can be used repeatedly in a program
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}
	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
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