<?php

abstract class coreEngine {

	protected $dbServer = NULL;
	protected $dbUser   = NULL;
	protected $dbPass   = NULL;
	protected $dbTitle  = NULL;
	public $connect     = NULL;

	public function __construct($dbServer, $dbUser, $dbPass, $dbTitle){

		$this->dbServer = $dbServer;
		$this->dbUser   = $dbUser;
		$this->dbPass   = $dbPass;
		$this->dbTitle  = $dbTitle;

		$this->connect = mysqli_connect($this->dbServer, $this->dbUser, $this->dbPass, $this->dbTitle);

		if(mysqli_connect_errno()){
			echo "<p style='color:red'>Database Connection Failed!</p>";
			die();
		}
	}

	public function __destruct(){
		if($this->connect){
			mysqli_close($this->connect);
		}
	}
}

class database extends coreEngine {

	public $queryStr = NULL;
	public $queryRes = NULL;

	public function executeQuery($queryStr){
		$this->queryStr = $queryStr;
		$this->queryRes = mysqli_query($this->connect, $this->queryStr);
		return $this->queryRes;
	}

	public function safeString($data) {
		return mysqli_real_escape_string($this->connect, $data);
	}
} 

?>