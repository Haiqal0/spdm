<?php 
include "../action/connect.php";
session_start();
$id = $_GET['id'];
$query = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE id = '$id'");
$data = mysqli_fetch_array($query);
if($_SESSION['status'] != 'login'){
	header("Location:login.php");
} else {
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistem Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
	<script src="https://kit.fontawesome.com/206142bfe3.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/fontawesome/css/all.min.css"/>
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
	    	<div class="col-2 bg-secondary mh-100"><br>
	    		<div class="col3">
	    			<a href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
	    		</div>
	    		<div class="col3">
	    			<a href="search.php"><i class="fa-solid fa-magnifying-glass"></i> Search</a>	
	    		</div>
	    		<div class="col3">
	    			<a href="../action/logout.php" class="text-warning"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>	
	    		</div>
	    	</div>
	    	<div class="col-10">
	    		<h3 class="p-3">Detail Mahasiswa</h3>
	    		<div class="up">
	    			<a href="update.php?id=<?= $id ?>"><i class="fa-solid fa-pen"></i> Update Data</a>
	    		</div>
	    		<br>
				<table class="table table-striped">
				  <tbody>
				    <tr>
				    	<td>Nama</td>
				    	<td>:</td>
				      	<td><?= $data['nama']; ?></td>
				    </tr>
				    <tr>
				    	<td>NIM</td>
				    	<td>:</td>
				    	<td><?= $data['nim']; ?></td>
				    </tr>
				    <tr>
				    	<td>NISN</td>
				    	<td>:</td>
				    	<td><?= $data['nisn']; ?></td>
				    </tr>
				    <tr>
				    	<td>Prodi</td>
				    	<td>:</td>
				    	<td><?= $data['prodi']; ?></td>
				    </tr>
				    <tr>
				    	<td>semester</td>
				    	<td>:</td>
				    	<td><?= $data['semester']; ?></td>
				    </tr>
				    <tr>
				    	<td>kelas</td>
				    	<td>:</td>
				    	<td><?= $data['kelas']; ?></td>
				    </tr>
				    <tr>
				    	<td>Email</td>
				    	<td>:</td>
				    	<td><?= $data['email']; ?></td>
				    </tr>
				    <tr>
				    	<td>Telepon</td>
				    	<td>:</td>
				    	<td><?= $data['telepon']; ?></td>
				    </tr>
				    <tr>
				    	<td>Jenis Kelamin</td>
				    	<td>:</td>
				    	<td><?= $data['jenis_kelamin']; ?></td>
				    </tr>
				    <tr>
				    	<td>Tempat Lahir(Sesuai Ijazah)</td>
				    	<td>:</td>
				    	<td><?= $data['tempat_lahir']; ?></td>
				    </tr>
				    <tr>
				    	<td>Tanggal Lahir</td>
				    	<td>:</td>
				    	<td><?= $data['tanggal_lahir']; ?></td>
				    </tr>
				    <tr>
				    	<td>Kabupaten</td>
				    	<td>:</td>
				    	<td><?= $data['kabupaten']; ?></td>
				    </tr>
				    <tr>
				    	<td>Status Perkawinan</td>
				    	<td>:</td>
				    	<td><?= $data['status_perkawinan']; ?></td>
				    </tr>
				    <tr>
				    	<td>Agama</td>
				    	<td>:</td>
				    	<td><?= $data['agama']; ?></td>
				    </tr>
				    <tr>
				    	<td>Tahun Masuk PT</td>
				    	<td>:</td>
				    	<td><?= $data['tahun_masuk_pt']; ?></td>
				    </tr>
				    <tr>
				    	<td>Alumni</td>
				    	<td>:</td>
				    	<td><?= $data['alumni']; ?></td>
					</tr>
				    <tr>
				    	<td>Sumber Biaya</td>
				    	<td>:</td>
				    	<td><?= $data['sumber_biaya']; ?></td>
				    </tr>
				    <tr>
				    	<td>Status Beasiswa</td>
				    	<td>:</td>
				    	<td><?= $data['status_beasiswa']; ?></td>
				    </tr>

				    <tr>
				    	<td>Nama Ayah</td>
				    	<td>:</td>
				    	<td><?= $data['nama_ayah']; ?></td>
				    </tr>
				    <tr>
				    	<td>Nama Ibu</td>
				    	<td>:</td>
				    	<td><?= $data['nama_ibu']; ?></td>
				    </tr>
				    <tr>
				    	<td>No Hp Orang tua</td>
				    	<td>:</td>
				    	<td><?= $data['hp_ortu']; ?></td>
				    </tr>
				   </tbody>
				</table>
</body>
</html>
<?php } ?>