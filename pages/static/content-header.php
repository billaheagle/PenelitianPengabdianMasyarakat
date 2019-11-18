<section class="content-header">
  <h1>
    <?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "Dashboard";
	    	} else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='kurikulum') {
	    			echo "Kelola Data Kurikulum";
	    		} else if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "Kelola Data Prestasi Dosen";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "Kelola Data Prestasi Mahasiswa";
	    		} else if($_SESSION['subpage']=='pengabdian-masyarakat') {
	    			echo "Kelola Data Pengabdian Masyarakat";
	    		} else if($_SESSION['subpage']=='penelitian') {
	    			echo "Kelola Data Penelitian";
	    		} else if($_SESSION['subpage']=='hasil-kerjasama') {
	    			echo "Kelola Data Hasil Kerjasama";
	    		}
	    	} else if($_SESSION['page']=='kurikulum') {
	    		echo "Kurikulum";
	    	} else if($_SESSION['page']=='pengabdian-masyarakat') {
	    		echo "Pengabdian Masyarakat";
	    	} else if($_SESSION['page']=='penelitian') {
	    		echo "Penelitian";
	    	} else if($_SESSION['page']=='hasil-kerjasama') {
	    		echo "Hasil Kerjasama";
	    	} else if($_SESSION['page']=='public') {
	    		if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "Prestasi Dosen";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "Prestasi Mahasiswa";
	    		}
	    	}
	    } else {
	    	echo "Dashboard";
	    }
    ?>
  </h1>
  <ol class="breadcrumb">
  	<?php
    	if(isset($_SESSION['page']) && isset($_SESSION['subpage'])) {
	    	if($_SESSION['page']=='Dashboard') {
	    		echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    	} else if($_SESSION['page']=='kelola') {
	    		if($_SESSION['subpage']=='kurikulum') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Kurikulum</li>";
	    		} else if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Prestasi Dosen</li>";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Prestasi Mahasiswa</li>";
	    		} else if($_SESSION['subpage']=='pengabdian-masyarakat') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Pengabdian Masyarakat</li>";
	    		} else if($_SESSION['subpage']=='penelitian') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Penelitian</li>";
	    		} else if($_SESSION['subpage']=='hasil-kerjasama') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Kelola Data</li><li class='active'>Hasil Kerjasama</li>";
	    		}
	    	} else if($_SESSION['page']=='kurikulum') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Kurikulum</li>";
	    	} else if($_SESSION['page']=='pengabdian-masyarakat') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Pengabdian Masyarakat</li>";
	    	} else if($_SESSION['page']=='penelitian') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Penelitian</li>";
	    	} else if($_SESSION['page']=='hasil-kerjasama') {
	    		echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li class='active'>Hasil Kerjasama</li>";
	    	} else if($_SESSION['page']=='public') {
	    		if($_SESSION['subpage']=='prestasi-dosen') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Prestasi</li><li class='active'>Prestasi Dosen</li>";
	    		} else if($_SESSION['subpage']=='prestasi-mahasiswa') {
	    			echo "<li><a href='../../connector.php?page=dashboard'><i class='fa fa-dashboard'></i> Dashboard</a></li><li>Prestasi</li><li class='active'>Prestasi Mahasiswa</li>";
	    		}
	    	}
	    } else {
	    	echo "<li><i class='fa fa-dashboard'></i> Dashboard</li>";
	    }
    ?>
  </ol>
</section>