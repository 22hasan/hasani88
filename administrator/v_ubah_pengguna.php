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
  <title>Ubah Pengguna</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Ubah Pengguna</h1>
  <?php
  //ambil koneksi 
  include "../config.php";

  //ambil id_login dari url 
  $id_login = $_GET['id_login'];

  //cari id_login di tb_login
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE id_login='$id_login'");
  //ambil datanya 
  $pengguna = mysqli_fetch_assoc($sql);
  ?>
  <form action="m_ubah_pengguna.php" method="post">
    <input type="hidden" name="id_login" id="" value="<?= $pengguna['id_login'] ?>">
    <table class="visual-hidden">
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama_pengguna" id=""  class="from form-control" value="<?= $pengguna['nama_pengguna'] ?>"></td>
      </tr>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username_pengguna" id=""  class="from form-control" value="<?= $pengguna['username_pengguna'] ?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="text" name="password_pengguna" id=""  class="from form-control" value="<?= $pengguna['password_pengguna'] ?>"></td>
      </tr>
      <tr>
        <td>Status</td>
        <td>:</td>
        <td> <select name="status" id=""  class="from form-control">
            <?php
            if ($pengguna['status'] == "Administrator") {
              echo "<option value='Administrator' selected >Administrator</option>";
            } else {
              echo "<option value='Administrator' >Administrator</option>";
            }

            if ($pengguna['status'] == "Petugas") {
              echo "<option value='Petugas' selected >Petugas</option>";
            } else {
              echo "<option value='Petugas' >Petugas</option>";
            }
            ?>

          </select></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn btn-outline-dark" value="Simpan" ></td>
      </tr>
    </table>
  </form>
  <script src="../js/bootstrap.min.js"></script>
  </div>
</body>

</html>