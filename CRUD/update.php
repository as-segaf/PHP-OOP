<?php 

	include'class.php';
	if (isset($_POST['submit'])) {
		$id = $_GET['id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$conn = new db_class();
		$conn->update($id, $username, $password);
		header("location:index.php");
	}


 ?>