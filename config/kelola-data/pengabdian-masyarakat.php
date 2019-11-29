<?php
	class pengabdianMasyarakat {
		var $table	= "pengabdian_masyarakat";
		var $dir	= "../../config/database.php";

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			while($d = mysqli_fetch_array($data)) {
				$result[] = $d;
			}
			return $result;
		}

		function store ($tema, $judul, $deskripsi, $tanggal, $tempat, $sumber_pembiayaan, $biaya, $evaluasi, $id_matakuliah, $file, $id_user) {
			include $this->dir;
			mysqli_query($connection, "INSERT INTO " . $this->table . "(tema, judul, deskripsi, tanggal, tempat, sumber_pembiayaan, biaya, evaluasi, id_matakuliah, file, id_user) VALUES('$tema', '$judul', '$deskripsi', '$tanggal', '$tempat', '$sumber_pembiayaan', '$biaya', '$evaluasi', '$id_matakuliah', '$file', '$id_user')");
		}

		function update ($id, $tema, $judul, $deskripsi, $tanggal, $tempat, $sumber_pembiayaan, $biaya, $evaluasi, $id_matakuliah, $file) {
			include $this->dir;
			mysqli_query($connection, "UPDATE " . $this->table . " SET tema='$tema', judul='$judul', deskripsi='$deskripsi', tanggal='$tempat', sumber_pembiayaan='$sumber_pembiayaan', biaya='$biaya', evaluasi='$evaluasi', id_matakuliah='$id_matakuliah', file='$file' WHERE id='$id'");
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