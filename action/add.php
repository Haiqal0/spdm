<?php 
include "connect.php";

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

$sql = "INSERT INTO data_mahasiswa ( nama ,  nim , nisn, prodi,  semester, kelas,  email,  telepon,  jenis_kelamin,  tempat_lahir,  tanggal_lahir,  kabupaten,  status_perkawinan,  agama,  tahun_masuk_pt,  alumni,  sumber_biaya,  status_beasiswa,  nama_ayah,  nama_ibu,  hp_ortu)
VALUES ('$nama', '$nim', '$nisn', '$prodi', '$semester', '$kelas', '$email', '$telepon', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$kabupaten', '$status_perkawinan', '$agama', '$tahun_masuk_pt', '$alumni', '$sumber_biaya', '$status_beasiswa', '$nama_ayah', '$nama_ibu', '$hp_ortu')";

if (mysqli_query($connect, $sql)) {
	header("Location:../index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

mysqli_close($connect);



?>
 