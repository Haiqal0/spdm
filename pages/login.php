<?php 
session_start();
if(isset($_SESSION['status'])){
	if($_SESSION['status'] == 'login'){
		header("Location:../index.php");
	}
}
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
	<center>
		<div class="judul">
			<h4><i class="fa-solid fa-gear"></i> <b>Sistem Pengolah Data Mahasiswa</b></h4>
		</div>
		<div class="conten">
			<hr>
			<form action="../action/login.php" method="POST">
				<input type="email" name="email" placeholder="Email" required=""><br>
				<input type="password" name="password" placeholder="Password" required=""><br>
				<?php if(isset($_GET['pesan'])){ 
                    $pesan = $_GET['pesan']; ?>
					<i class="text-danger"><?= $pesan ?></i><br>
				<?php } ?>
				<button>Login</button>
			</form>
		</div>
	</center>
</body>
</html>