<div class="container">
  <h1>Tambah Data User</h1><hr>
    <form method="post" action="crud/proses_tambah.php">
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" autocomplete="off" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="user" placeholder="Masukan Username" autocomplete="off" required>
      </div>
       <div class="form-group">
        <label for="Password">Password</label>
        <input type="password" class="form-control" id="Password" name="pass" placeholder="Masukan Password" required>
      </div>
      <div class="form-group">
        <label for="Email">Email</label>
        <input type="email" class="form-control" id="Email" name="email" placeholder="Masukan Email" autocomplete="off" required>
      </div>
      <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
    </form>
</div>