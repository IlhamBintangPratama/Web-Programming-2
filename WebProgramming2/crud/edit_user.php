<?php 
  include 'koneksi.php';
  $id = $_GET['id'];
  $query = "SELECT * FROM mahasiswa WHERE id_user = '$id'";
  $sql = mysqli_query($koneksi,$query);
  $data = mysqli_fetch_array($sql);
 ?>
<h1>Edit Data User</h1><hr>
<form method="post" action="crud/proses_edit.php">
  <input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama']; ?>">
  </div>
  <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="user" value="<?php echo $data['username']; ?>">
  </div>
   <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="pass" value="<?php echo $data['password']; ?>" >
  </div>
  <div class="form-group">
    <label for="Email">Email</label>
    <input type="email" class="form-control" id="Email" name="email" value="<?php echo $data['email']; ?>" >
  </div>
  <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>