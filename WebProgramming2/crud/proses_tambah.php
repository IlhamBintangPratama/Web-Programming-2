<?php 
	
	include '../koneksi.php';
	If (isset($_POST['simpan'])) {
		
		$nama = $_POST['nama'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$email = $_POST['email'];
		$query = "INSERT INTO mahasiswa (nama,username,password,email) VALUES ('$nama','$user','$pass','$email')";
		$sql = mysqli_query($koneksi,$query);
		if ($sql) {
			echo "<script>alert('Data berhasil disimpan')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= '../index.php'}, 500);
			</script>";
		}else{
			
			echo "<script>alert('Data gagal disimpan')</script>";
			echo "<script>var timer = setTimeout(function()
			{ window.location= '../index.php?page=tambah_data'}, 500);
			</script>";
		}
	}
 ?>