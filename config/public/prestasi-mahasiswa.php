<?php
	class prestasiMahasiswa {
		var $table	= "prestasi_mahasiswa";
		var $dir	= "../../config/database.php";
		var $status	= null;

		function show() {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table);
			while($d = mysqli_fetch_array($data)) {
				$result[] = $d;
				$this->status = "true";
			}

			if($this->status == null) {
				return null;
			}
			
			return $result;
		}

		function search_by_id ($id) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE id='$id'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
				$this->status = "true";
			}

			if($this->status == null) {
				return null;
			}
			
			return $result;
		}
		
		function search_field_by_id ($id, $field) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field' FROM " . $this->table . " WHERE id='$id'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
				$this->status = "true";
			}

			if($this->status == null) {
				return null;
			}
			
			return $result;
		}

		function search_by_field ($field, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT * FROM " . $this->table . " WHERE $field='$param'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
				$this->status = "true";
			}

			if($this->status == null) {
				return null;
			}
			
			return $result;
		}

		function search_field_by_field ($field1, $field2, $param) {
			include $this->dir;
			$data = mysqli_query($connection, "SELECT '$field1' FROM " . $this->table . " WHERE $field2='$param'");
			while($d = mysqli_fetch_array($data)){
				$result[] = $d;
				$this->status = "true";
			}

			if($this->status == null) {
				return null;
			}
			
			return $result;
		}
	}
?>