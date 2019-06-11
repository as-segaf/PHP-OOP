<?php 

	include'class.php';
	$id = $_GET['id'];
	$conn = new db_class();
	$conn->delete($id);
	header("location: index.php");



 ?>