<?php

abstract class databaseDriver {

	protected $host  		= NULL;
	protected $username     = NULL;
	protected $password  	= NULL;
	protected $database  	= NULL;
	protected $connect      = NULL;

	public function __construct($host,$username,$password,$database){

		$this->host    	   = $host;
		$this->username    = $username;
		$this->password    = $password;
		$this->database    = $database;

		$this->connect = mysqli_connect($this->host,$this->username,$this->password,$this->database);

		if(mysqli_connect_errno()){
			echo "<p style='color:red'>Database Connection Failed....!</p>";
			die();
		}
	}

	public function __destruct(){
		if($this->connect){
			mysqli_close($this->connect);
		}
	}
}

class database extends databaseDriver {

	public $query 	= NULL;
	public $result 	= NULL;

	public function executeQuery($query){
		$this->query  = $query;
		$this->result = mysqli_query($this->connect, $this->query);
		return $this->result;
	}

	public function safeString($data) {
		return mysqli_real_escape_string($this->connect, $data);
	}

	public function updateRecord($table, $data, $where){
		$update_pairs = [];
		foreach($data as $column => $value){
			$safe_value = $this->safeString($value);
			$update_pairs[] = "`$column` = '$safe_value'";
		}
		
		$query_string = implode(', ', $update_pairs); 
		$this->query = "UPDATE `$table` SET $query_string WHERE $where";
		return mysqli_query($this->connect, $this->query);
	}
} 

?>