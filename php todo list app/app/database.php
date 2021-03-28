<?php

class Database {

	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'todo_list';

	protected function connect() {

		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$pdo = new PDO($dsn, $this->username, $this->password);
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

		return $pdo;

	}

	




















    // public $connection;
    
    // public function connect() {

    //     $this->connection = new mysqli("localhost", "root", "", "todo_list");
    
    // if(!$this->connection) {
    //     die('Can not find database');
    // }

    // }

    // public function query($sql)
	// {

	// 	$result = $this->connection->query($sql);

	// 	$this->confirm_query($result);

	// 	return $result;
	// }

	// private function confirm_query($result)
	// {


	// 	if (!$result) {

	// 		die("Query Failed" . $this->connection->error);
	// 	}
	// }

} /// end class Database

    // $database = new Database();