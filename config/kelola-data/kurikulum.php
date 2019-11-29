<?php
	class kurikulum {
		var $table	= "matakuliah";
		var $dir	= "../../config/database.php";

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			while($d = mysqli_fetch_array($data)) {
				$result[] = $d;
			}
			return $result;
		}
	 
		function store ($kode_matakuliah, $matakuliah, $semester, $sks_teori, $sks_lab, $jenis, $file, $id_user) {
			include $this->dir;
			mysqli_query($connection, "INSERT INTO " . $this->table . "(kode_matakuliah, matakuliah, semester, sks_teori, sks_lab, $jenis, file, id_user) VALUES('$kode_matakuliah', '$matakuliah', '$semester', '$sks_teori', '$sks_lab', '$jenis', '$file', '$id_user')");
		}

		function update ($id, $kode_matakuliah, $matakuliah, $semester, $sks_teori, $sks_lab, $jenis, $file) {
			include $this->dir;
			mysqli_query($connection, "UPDATE " . $this->table . " SET kode_matakuliah='$kode_matakuliah', matakuliah='$matakuliah', semester='$semester', sks_teori='$sks_teori', sks_lab='$sks_lab', jenis='$jenis', file='$file' WHERE id='$id'");
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