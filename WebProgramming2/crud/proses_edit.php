<?php 
	include '../koneksi.php';
	If(isset($_POST['simpan'])){
		$id = $_POST['id'];
		$nama = $_POST['nama'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		$query = "UPDATE mahasiswa SET nama='$nama', username='$user', password='$pass', email='$email' WHERE id_user = '$id'";
		$sql = mysqli_query($koneksi,$query);
		if ($sql) {
			echo "<script>alert('Data berhasil disimpan')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= '../index.php'}, 500);
			</script>";
		}else{
			
			echo "<script>alert('Data gagal disimpan')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= '../index.php?page=edit_data'}, 500);
			</script>";
		}
	}
 ?>