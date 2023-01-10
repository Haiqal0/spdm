<?php 
session_start();
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
	    	<div class="col-10"><br>
	    		<h3>Tambah Data</h3>
				
				<form action="../action/add.php" method="POST">
					<div class="form-group">
					    <label for="nama">Nama</label>
					    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" required="" name="nama">
					</div>
					<div class="form-group">
					    <label for="nim">NIM</label>
					    <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" required="" name="nim">
					</div>
					<div class="form-group">
					    <label for="nisn">NISN</label>
					    <input type="text" class="form-control" id="nisn" placeholder="Masukkan NISN" required="" name="nisn">
					</div>
					Program Studi
					<select class="form-control" name="prodi">
					  <option value="default">Pilih</option>
					  <option value="Teknik Sipil">Teknik Sipil</option>
					  <option value="Teknik Mesin">Teknik Mesin</option>
					  <option value="Teknik Kimia">Teknik Kimia</option>
					  <option value="Arsitektur">Arsitektur</option>
					  <option value="Teknik Elektro">Teknik Elektro</option>
					  <option value="Teknik Industri">Teknik Industri</option>
					  <option value="Teknik Geofisika">Teknik Geofisika</option>
					  <option value="Teknik Pertambangan">Teknik Pertambangan</option>
					  <option value="Teknik Geologi">Teknik Geologi</option>
					  <option value="Teknik Komputer">Teknik Komputer</option>
					  <option value="Perencanaan Wilayah dan Kota">Perencanaan Wilayah dan Kota</option>
					</select>
					Semester
					<select class="form-control" name="semester">
					  <option value="default">Pilih</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					</select>
					Kelas
					<select class="form-control" name="kelas">
					  <option value="default">Pilih</option>
					  <option value="A">A</option>
					  <option value="B">B</option>
					  <option value="C">C</option>
					  <option value="D">D</option>
					</select>
					<div class="form-group">
					    <label for="email">Email</label>
					    <input type="email" class="form-control" id="email" placeholder="Masukkan Email" required="" name="email">
					</div>
					<div class="form-group">
					    <label for="telepon">Telepon</label>
					    <input type="text" class="form-control" id="telepon" placeholder="Masukkan No Telepon" required="" name="telepon">
					</div>
					Jenis Kelamin
					<select class="form-control" name="jenis_kelamin">
					  <option value="default">Pilih</option>
					  <option value="laki-laki">Laki-Laki</option>
					  <option value="Perempuan">Perempuan</option>
					</select>
					<div class="form-group">
					    <label for="tempatlahir">Tempat Lahir</label>
					    <input type="text" class="form-control" id="tempatlahir" placeholder="Masukkan tempat lahir" required="" name="tempat_lahir">
					</div>
					<div class="form-group">
					    <label for="date">Tanggal Lahir</label>
					    <input type="date" class="form-control" id="date" required="" name="tanggal_lahir">
					</div>
					<div class="form-group">
					    <label for="kabupaten">Kabupaten</label>
					    <input type="text" class="form-control" id="kabupaten" placeholder="Masukkan Kabupaten" required="" name="kabupaten">
					</div>
					Status Perkawinan
					<select class="form-control" name="status_perkawinan">
					  <option value="default">Pilih</option>
					  <option value="Sudah Kawin">Kawin</option>
					  <option value="Belum Kawin">Belum Kawin</option>
					</select>
					Agama
					<select class="form-control" name="agama">
					  <option value="default">pilih</option>
					  <option value="Islam">Islam</option>
					  <option value="Kristen">Kristen</option>
					  <option value="Katolik">Katolik</option>
					  <option value="Hindu">Hindu</option>
					  <option value="Budha">Budha</option>
					  <option value="Konghucu">Konghucu</option>
					</select>
					Tahun Masuk PT
					<select class="form-control" name="tahun_masuk_pt">
					  <option value="default">Pilih</option>
					  <option value="2022">2022</option>
					  <option value="2021">2021</option>
					  <option value="2020">2020</option>
					  <option value="2019">2019</option>
					  <option value="2018">2018</option>
					</select>
					<div class="form-group">
					    <label for="alumni">Alumni</label>
					    <input type="text" class="form-control" id="alumni" placeholder="Alumni sekolah" required="" name="alumni">
					</div>
					<div class="form-group">
					    <label for="sumberbiaya">Sumber Biaya</label>
					    <input type="text" class="form-control" id="sumberbiaya" placeholder="Masukkan Sumber Biaya" required="" name="sumber_biaya">
					</div>
					Status Beasiswa
					<select class="form-control" name="status_beasiswa">
					  <option value="default">Pilih</option>
					  <option value="Beasiswa">Beasiswa</option>
					  <option value="Tidak Beasiswa">Tidak Beasiswa</option>
					</select>
					<div class="form-group">
					    <label for="namaayah">Nama Ayah</label>
					    <input type="text" class="form-control" id="namaayah" placeholder="Masukkan Nama Ayah" required="" name="nama_ayah">
					</div>
					<div class="form-group">
					    <label for="namaibu">Nama Ibu</label>
					    <input type="text" class="form-control" id="namaibu" placeholder="Masukkan Nama Ibu" required="" name="nama_ibu">
					</div>
					<div class="form-group">
					    <label for="hportu">No HP Orang Tua</label>
					    <input type="text" class="form-control" id="hportu" placeholder="Masukkan No Hp Orangtua" required="" name="hp_ortu">
					</div><br>
					<div class="ba">
						<button type="submit" class="btn btn-primary">Tambah</button><br><br>
			    	</div>
			</form>
</body>
</html>
<?php } ?>