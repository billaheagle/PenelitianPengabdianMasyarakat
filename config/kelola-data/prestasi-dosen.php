<?php
	class prestasiDosen {
		var $table	= "prestasi_dosen";
		var $dir	= "../../config/database.php";

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			while($d = mysqli_fetch_array($data)) {
				$result[] = $d;
			}
			return $result;
		}
	 
		function store ($bidang_keahlian, $tingkat, $tahun, $file, $id_user) {
			include $this->dir;
			mysqli_query($connection, "INSERT INTO " . $this->table . "(bidang_keahlian, tingkat, tahun, file, id_user) VALUES('$bidang_keahlian', '$tingkat', '$tahun', '$file', '$id_user')");
		}

		function update ($id, $bidang_keahlian, $tingkat, $tahun, $file) {
			include $this->dir;
			mysqli_query($connection, "UPDATE " . $this->table . " SET bidang_keahlian='$bidang_keahlian', tingkat='$tingkat', tahun='$tahun', file='$file' WHERE id='$id'");
		}

		function delete ($id) {
			include $this->dir;
			mysqli_query($connection, "DELETE FROM " . $this->table . " WHERE id='$id'");
		}

		function search_by_id ($id) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id='$id'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
			}
			return $result;
		}
		
		function search_field_by_id ($id, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id='$id'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
			}
			return $result;
		}

		function search_by_field ($field, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE $field='$param'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
			}
			return $result;
		}

		function search_field_by_field ($field1, $field2, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field1' FROM " . $this->table . " WHERE $field2='$param'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
			}
			return $result;
		}
	}
?>