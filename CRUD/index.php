<!DOCTYPE html>
<html>
	<head>
		<title>CRUD OOP</title>
	</head>

	<body>
		<h2>CRUD OOP</h2>
		<form method="post" action="create.php">
			<tr>
				<td>username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password :</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit"></td>
			</tr>
		</form>

		<h2>Daftar Data</h2>
		<table border="1" cellpadding="5" cellspacing="0">
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th colspan="2">Option</th>
			</tr>

			<?php 
				include 'class.php';
				$conn = new db_class();
				$read = $conn->read();
				while($fetch = $read->fetch_array()){
			?>

			<tr>
				<td><?php echo $fetch['username']; ?></td>
				<td><?php echo $fetch['password']; ?></td>
				<td><a href="edit.php?id=<?= $fetch['id']; ?>">Edit</a></td>
				<td><a href="delete.php?id=<?= $fetch['id']; ?>">Delete</a></td>
			</tr>

				<?php
					}

				 ?>

		</table>
	</body>
</html>