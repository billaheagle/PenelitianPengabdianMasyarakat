<?php
 	session_start(); 
	class authentication {
		var $table	= "user";
		var $dir	= "../../config/database.php";

		function login($email, $password) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE email='$email' AND password='$password'");
			$check = mysqli_num_rows($data);

			if($check > 0) {
				$d = mysqli_fetch_array($data);
				$_SESSION['user']  = $d['id'];
				$_SESSION['level'] = $d['level'];
				$_SESSION['email'] = $d['email'];
				$_SESSION['nama']  = $d['nama'];
				header("location:../../index.php");
			} else {
				header("location:../../pages/public/login.php?pesan=gagal");
			}
		}

		function logout() {
			include $this->dir;
			session_destroy();
			header("location:../../index.php");
		}
	}
?>