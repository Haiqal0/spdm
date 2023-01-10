<?php 

include "connect.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$nisn = $_POST['nisn'];
$prodi = $_POST['prodi'];
$semester = $_POST['semester'];
$kelas = $_POST['kelas'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$kabupaten = $_POST['kabupaten'];
$status_perkawinan = $_POST['status_perkawinan'];
$agama = $_POST['agama'];
$tahun_masuk_pt = $_POST['tahun_masuk_pt'];
$alumni = $_POST['alumni'];
$sumber_biaya = $_POST['sumber_biaya'];
$status_beasiswa = $_POST['status_beasiswa'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$hp_ortu = $_POST['hp_ortu'];

$sql = "UPDATE data_mahasiswa SET nama = '$nama', nim = '$nim', nisn = '$nisn', prodi = '$prodi', semester = '$semester', kelas = '$kelas', email = '$email', telepon = '$telepon', jenis_kelamin = '$jenis_kelamin', tanggal_lahir = '$tanggal_lahir', tempat_lahir = '$tempat_lahir', kabupaten = '$kabupaten', status_perkawinan = '$status_perkawinan', agama = '$agama', tahun_masuk_pt = '$tahun_masuk_pt', alumni = '$alumni', sumber_biaya = '$sumber_biaya', status_beasiswa = '$status_beasiswa', nama_ayah = '$nama_ayah', nama_ibu = '$nama_ibu', hp_ortu = '$hp_ortu' WHERE id = $id";
$query = mysqli_query($connect, $sql);

if ($query) {
	header("location:../index.php");
	echo "<script>
			alert('Berhasil Diubah!');
		  </script>";
} else {
	echo mysqli_error($connect);
}

 ?>
