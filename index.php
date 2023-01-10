<?php 
include "action/connect.php"; 
session_start();
if($_SESSION['status'] != 'login'){
	header("Location:pages/login.php");
} else {
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/206142bfe3.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/all.min.css"/>
</head>
<body>
	
	<div class="container-fluid">
	 	<div class="row row-cols-2">
	   		<div class="col-2 bg-success">
	    		<div class="col1">
	    			<i class="fa-solid fa-gear"></i> <b><i>SPDM</i></b>
	    		</div>
	    	</div>
	    	<div class="col-10 bg-secondary">
	    		<div class="col2">
	    			<i class="fa-solid fa-bars"></i>	
	    		</div>
	    	</div>
	    	<div class="col-2 bg-secondary vh-100"><br>
	    		<div class="col3-this">
	    			<i class="fa-solid fa-house"></i> Home
	    		</div>
	    		<div class="col3">
	    			<a href="pages/search.php"><i class="fa-solid fa-magnifying-glass"></i> Search</a>	
	    		</div>
	    		<div class="col3">
	    			<a href="action/logout.php" class="text-warning"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>	
	    		</div>
	    	</div>
	    	<div class="col-10">
	    		<div class="top">
	    			<a href="pages/add.php">+ Tambah Data</a>
		    		<form action="index.php" method="get">
						<input type="text" name="cari" <?php 
							if(isset($_GET['cari'])){
							$cari = $_GET['cari'];
						?> value="<?= $cari ?>"<?php
						} else {
				 ?>placeholder="search name or nim... <?php } ?>">
						<button><span class="fa fa-search"></span></button>
	            	</form>
	            </div>
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Nama</th>
				      <th scope="col">NIM</th>
				      <th scope="col">Prodi</th>
				      <th scope="col">Semester</th>
				      <th scope="col">Kelas</th>
				      <th scope="col">Angkatan</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						$mahasiswa = mysqli_query($connect, "SELECT * from data_mahasiswa where nama like '%$cari%' OR nim like '%$cari%'");
					} else {
						$mahasiswa = mysqli_query($connect, "SELECT * FROM data_mahasiswa");
					}

					$no = 1;
					foreach($mahasiswa as $row){
				 ?>
				  <tbody>
				    <tr>
				      <th scope="row"><?= $no; ?></th>
				      <td><?= $row['nama']; ?></td>
				      <td><?= $row['nim']; ?></td>
				      <td><?= $row['prodi']; ?></td>
				      <td><?= $row['semester']; ?></td>
				      <td><?= $row['kelas']; ?></td>
				      <td><?= $row['tahun_masuk_pt']; ?></td>
				      <td>
				      	<div class="info">
				      		<a href="pages/detail.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
				      	</div>
				      	<div class="edit">
				      		<a href="pages/update.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-pen"></i></a>
				      	</div>
				      	<div class="del">
				      		<a href="action/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data <?= $row['nama']; ?>?')"><i class="fa-solid fa-trash"></i></a>
				      	</div>
				      </td>
				    </tr>
				    <?php 
				    $no += 1;
				    }
				     ?>
				   </tbody>
				</table>
			</div>
		</div>
</body>
</html>
<?php } ?>