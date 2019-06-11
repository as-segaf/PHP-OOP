<?php 

	class database{

		public $dbhost = "localhost";
		public $dbuser = "root";
		public $dbpass = "root";
		public $dbname = "php";
		public $conn;
		public $error;

		public function connect(){
			$this->conn = new mysqli($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);
			if (!$this->conn) {
				$this->error =  "Fatal Error : Can't connct to database". $this->connect->connect_error();
				return false;
			}
		}

	}


 ?>