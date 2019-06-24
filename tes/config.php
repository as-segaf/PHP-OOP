<?php
	
	class database{
		public $dbhost = "localhost";
		public $dbuser = "root";
		public $dbpass = "root";
		public $dbname = "php";
		public $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	}


 ?>