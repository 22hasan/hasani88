<?php
session_start();
//cek session 
if ($_SESSION['login'] != 'petugas') {
  //kembali ke halaman login
  header('location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pelanggan Baru</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Tambah Pelanggan Baru</h1>
  <form action="m_tambah_pelanggan.php" method="post">
    <input type="hidden" name="id_login" value="<?= $_SESSION['id_login'] ?>">
    <table class="visual-hidden">
      <tr>
        <td>Id Pelanggan</td>
        <td>:</td>
        <td><input type="text" name="id_pelanggan" id="" class="form-control" readonly  value="<?= date('mis'); ?>"></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="text" name="alamat_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
</svg>Telepon</td>
        <td>:</td>
        <td><input type="text" name="telepon_pelanggan" id="" class="form-control"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" class="btn btn-outline-dark" value="Simpan"></td>
      </tr>
      <script src="../js/bootstrap.min.js"></script>
    </table>
  </form>
  </div>
</body>

</html>