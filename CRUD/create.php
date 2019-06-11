<?php 

	include'class.php';
	if (isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = new db_class();
		$conn->create($username, $password);
		header('location: index.php');
	}



 ?>