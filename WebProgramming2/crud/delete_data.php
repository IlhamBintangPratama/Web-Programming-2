<?php 
	
	include 'koneksi.php';
	$id = $_GET['id'];
	$query = "DELETE FROM user WHERE id_user = '$id'";
	$sql = mysqli_query($koneksi,$query);
	if ($sql) {
			echo "<script>alert('Data berhasil dihapus')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= 'index.php'}, 500);
			</script>";
		}else{
			
			echo "<script>alert('Data gagal dihapus')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= 'index.php'}, 500);
			</script>";
		}
 ?>