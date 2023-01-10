<?php 
include "connect.php";

$id = $_GET['id'];

$sql = "DELETE FROM data_mahasiswa WHERE id='$id'";

if (mysqli_query($connect, $sql)) {
  header("Location:../index.php");
  echo "<script>
			alert('Deleted');
		  </script>";
  exit;
} else {
  echo "Error deleting record: " . mysqli_error($connect);
}

mysqli_close($connect);
?>

 ?>