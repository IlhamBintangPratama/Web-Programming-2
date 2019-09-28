<?php 
  
  include 'koneksi.php';
  $query = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
 ?>

<h3>Data User</h3><hr>
<a href="?page=tambah_data" class="btn btn-success">Tambah Data</a>
<div class="mt-3">
  <table class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col" style="width: 3%;">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Ussername</th>
        <th scope="col">Password</th>
        <th scope="col">Email</th>
        <th scope="col" style="width: 10%;">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php $nomor = 1; 
        while ($data = mysqli_fetch_array($query)) {
      ?>
      <tr>
        <th scope="row"><?php echo $nomor++ ?></th>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['username']; ?></td>
        <td><?php echo $data['password']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td>
          <a href="?page=edit_data&id=<?php echo $data['id_user']; ?>" class="btn btn-sm btn-primary">Edit</a>
          <a href="?page=delete_data&id=<?php echo $data['id_user']; ?>" class="btn btn-sm btn-danger">Delete</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>