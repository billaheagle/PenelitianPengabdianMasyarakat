<?php 
	session_start();
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'dashboard':
				header('location:index.php');
				$_SESSION['page'] = "dashboard";
				$_SESSION['subpage'] = "";
				break;
			case 'kelola-hasil-kerjasama':
				header('location:pages/kelola-data/hasil-kerjasama.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "hasil-kerjasama";
				break;
			case 'kelola-kurikulum':
				header('location:pages/kelola-data/kurikulum.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "kurikulum";
				break;
			case 'kelola-penelitian':
				header('location:pages/kelola-data/penelitian.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "penelitian";
				break;
			case 'kelola-pengabdian-masyarakat':
				header('location:pages/kelola-data/pengabdian-masyarakat.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "pengabdian-masyarakat";
				break;
			case 'kelola-prestasi-dosen':
				header('location:pages/kelola-data/prestasi-dosen.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "prestasi-dosen";
				break;
			case 'kelola-prestasi-mahasiswa':
				header('location:pages/kelola-data/prestasi-mahasiswa.php');
				$_SESSION['page'] = "kelola";
				$_SESSION['subpage'] = "prestasi-mahasiswa";
				break;
			case 'hasil-kerjasama':
				header('location:pages/public/hasil-kerjasama.php');
				$_SESSION['page'] = "hasil-kerjasama";
				$_SESSION['subpage'] = "";
				break;
			case 'kurikulum':
				header('location:pages/public/kurikulum.php');
				$_SESSION['page'] = "kurikulum";
				$_SESSION['subpage'] = "";
				break;
			case 'penelitian':
				header('location:pages/public/penelitian.php');
				$_SESSION['page'] = "penelitian";
				$_SESSION['subpage'] = "";
				break;
			case 'pengabdian-masyarakat':
				header('location:pages/public/pengabdian-masyarakat.php');
				$_SESSION['page'] = "pengabdian-masyarakat";
				$_SESSION['subpage'] = "";
				break;
			case 'prestasi-dosen':
				header('location:pages/public/prestasi-dosen.php');
				$_SESSION['page'] = "public";
				$_SESSION['subpage'] = "prestasi-dosen";
				break;
			case 'prestasi-mahasiswa':
				header('location:pages/public/prestasi-mahasiswa.php');
				$_SESSION['page'] = "public";
				$_SESSION['subpage'] = "prestasi-mahasiswa";
				break;
			case 'blog':
				header('location:pages/public/blog.php');
				$_SESSION['page'] = "dashboard";
				$_SESSION['subpage'] = "";
				break;	
			case 'login':
				header('location:pages/public/login.php');
				$_SESSION['page'] = "login";
				$_SESSION['subpage'] = "";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	} else {
		header('location:index.php');
		$_SESSION['page'] = "dashboard";
		$_SESSION['subpage'] = "";
	}
?>