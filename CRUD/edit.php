<!DOCTYPE html>
<html>
	<head>
		<title>CRUD OOP</title>
	</head>

	<body>

		<?php 
			include'class.php';
			$id = $_GET['id'];
			$conn = new db_class();
			$edit = $conn->edit($id);
			$result = $edit->fetch_array();
		 ?>

		<h2>Edit form</h2>
		<form method="post" action="update.php?id=<?= $result['id']; ?>">
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" value="<?= $result['username']; ?>"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="text" name="password" value="<?= $result['password']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</form>
	</body>
</html>