<?php 
include "../action/connect.php"; 
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
	    	<div class="col-2 bg-secondary vh-100"><br>
	    		<div class="col3">
	    			<a href="../index.php"><i class="fa-solid fa-house"></i> Home</a>
	    		</div>
	    		<div class="col3-this">
	    			<i class="fa-solid fa-magnifying-glass"></i> Search
	    		</div>
	    		<div class="col3">
	    			<a href="../action/logout.php" class="text-warning"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>	
	    		</div>
	    	</div>
	    	<div class="col-10">
	    		<div class="serch">
	    				<form action="">
		    				<table>
		    					<tr>
		    						<td>
		    							<h4>Filter Data Berdasarkan 
		    							<?php 
		    							if (isset($_GET['setkelas'])){
		    								print($_GET['setkelas']);
		    							} else if (isset($_GET['setangkatan'])){
		    								print($_GET['setangkatan']);
		    							} else if (isset($_GET['setsemester'])){
		    								print($_GET['setsemester']);
		    							} else if (isset($_GET['setprodi'])) {
		    								print($_GET['setprodi']);
		    							} else {
		    								print("...");
		    							}
		    							?>
		    							</h4>
		    						</td>
		    					</tr>
		    					<tr>
		    						<td>
		    							<select name="filter">
										  <option value="default">
										  	<?php 
										  		if(isset($_GET['filter'])){
										  			print($_GET['filter']);
										  		} else {
										  			print("Pilih");
										  		}
										  	 ?>
										  </option>
										  <option value="program studi">Program Studi</option>
										  <option value="semester">Semester</option>
										  <option value="angkatan">Angkatan</option>
										  <option value="kelas">Kelas</option>
										</select>
		    						</td>
		    						<td>
		    							<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
		    						</td>
		    					</tr>
		    					</form>
		    					<tr>
		    						<td><form action="">
		    							<?php
		    								if(isset($_GET['filter']) ){
		    									$no = 9;
		    									if($_GET['filter'] == 'kelas'){
		    							?>
		    							<select name="setkelas">
										  <option value="default">Pilih Kelas</option>
										  <option value="A">A</option>
										  <option value="B">B</option>
										  <option value="C">C</option>
										  <option value="D">D</option>
										</select>
		    							<?php
		    									} else if ($_GET['filter'] == 'angkatan'){
		    							?>
		    							<select name="setangkatan">
										  <option value="default">Pilih Angkatan</option>
										  <option value="2022">2022</option>
										  <option value="2021">2021</option>
										  <option value="2020">2020</option>
										  <option value="2019">2019</option>
										  <option value="2018">2018</option>
										</select>
		    							<?php
		    									} else if ($_GET['filter'] == 'semester'){
		    							?>
										<select name="setsemester">
										  <option value="default">Pilih Semester</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="4">4</option>
										  <option value="5">5</option>
										  <option value="6">6</option>
										  <option value="7">7</option>
										  <option value="8">8</option>
										</select>
		    							<?php
		    									} else if ($_GET['filter'] == 'program studi'){
		    							?>
		    							<select name="setprodi">
										  <option value="default">Pilih Program Studi</option>
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
		    							<?php
		    									}
		    							?>
		    						</td>
		    						<td>
		    							<button class="ths">Terapkan Filter</button>
		    						</td>

		    							<?php
		    								}
		    							  ?>
		    					</tr></form>
		    				</table>
	    			</div>
	    		<div class="top">
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
					if(isset($_GET['setprodi'])){
						$setprodi = $_GET['setprodi'];
						$mahasiswa = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE prodi = '$setprodi'");
					} else if(isset($_GET['setsemester'])){
						$setsemester = $_GET['setsemester'];
						$mahasiswa = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE semester = '$setsemester'");
					} else if(isset($_GET['setangkatan'])){
						$setangkatan = $_GET['setangkatan'];
						$mahasiswa = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE tahun_masuk_pt = '$setangkatan'");
					} elseif(isset($_GET['setkelas'])){
						$setkelas = $_GET['setkelas'];
						$mahasiswa = mysqli_query($connect, "SELECT * FROM data_mahasiswa WHERE kelas = '$setkelas'");
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
				      		<a href="detail.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-circle-info"></i></a>
				      	</div>
				      	<div class="edit">
				      		<a href="update.php?id=<?= $row['id']; ?>"><i class="fa-solid fa-pen"></i></a>
				      	</div>
				      	<div class="del">
				      		<a href="../action/delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Hapus Data <?= $row['nama']; ?>?')"><i class="fa-solid fa-trash"></i></a>
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