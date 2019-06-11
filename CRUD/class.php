<?php 

	include 'config.php';

	class db_class extends database{

		public function __construct(){
			$this->connect();
		}

		public function create($username, $pass){
			$stmt =  $this->conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
			$stmt->bind_param("ss", $username, $pass);
			if ($stmt->execute()) {
				$stmt->close();
				$this->conn->close();
				return true;
			}
		}

		public function read(){
			$stmt = $this->conn->prepare("SELECT * FROM user") or die($this->conn->error);
			if ($stmt->execute()) {
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function delete($id){
			$stmt = $this->conn->prepare("DELETE FROM user WHERE id=$id");
			if ($stmt->execute()) {
				return true;
			}
		}

		public function edit($id){
			$stmt = $this->conn->prepare("SELECT * FROM user WHERE id=$id") or die($this->conn->error);
			if ($stmt->execute()) {
				$result = $stmt->get_result();
				return $result;
			}
		}

		public function update($id, $username, $password){
			$stmt = $this->conn->prepare("UPDATE user SET username='$username', password='$password' WHERE id=$id");
			if ($stmt->execute()) {
				return true;
			}
		}
	}


 ?>