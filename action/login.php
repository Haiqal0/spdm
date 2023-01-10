<?php 
session_start();
include "connect.php";

$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($connect, "SELECT * from user where email='$email' and password='$password'");


$cek = mysqli_num_rows($query);

if($cek > 0){
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:../pages/login.php?pesan=Email atau Password Salah!");
}

?>