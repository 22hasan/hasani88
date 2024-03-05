<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'admin') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrasi</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>Daftar Pengguna</h1>
  <a href="v_tambah_pengguna_baru.php" class="btn btn-outline-success"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>Tambah Pengguna</a>
  <br><br>
  <table class="table table-hover table-info">
    <tr class="table-dark">
      <td>Id Login</td>
      <td>Nama</td>
      <td>Username</td>
      <td>Password</td>
      <td>Status</td>
      <td>Aksi</td>
    </tr>
    <?php
    //ambil koneksi
    include "../config.php";
    //ambil data di tb_login
    $sql = mysqli_query($koneksi, 'SELECT * FROM tb_login ORDER BY id_login DESC');
    foreach ($sql as $pengguna) {
    ?>
      <tr>
        <td><?= $pengguna['id_login'] ?> </td>
        <td><?= $pengguna['nama_pengguna'] ?></td>
        <td><?= $pengguna['username_pengguna'] ?></td>
        <td><?= $pengguna['password_pengguna'] ?></td>
        <td><?= $pengguna['status'] ?></td>
        <td><a href="v_ubah_pengguna.php?id_login=<?= $pengguna['id_login'] ?>" class="btn btn-outline-primary">Ubah</a></td>
      </tr>
      <script src="../js/bootstrap.min.js"></script>
    <?php } ?>
  </table>
  </div>
</body>

</html>