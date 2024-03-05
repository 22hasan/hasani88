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
  <title>Ubah Barang</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>

<body>
  <?php include "navbar.php" ?>
  <div class="container">
  <h1>Ubah Barang</h1>
  <?php
  //ambil koneksi 
  include "../config.php";

  //ambil id_barang dari url 
  $id_barang = $_GET['id_barang'];

  //cari id_login di tb_login
  $sql = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id_barang'");
  //ambil datanya 
  $barang = mysqli_fetch_assoc($sql);
  ?>
  <form action="m_ubah_barang.php" method="post">
    <input type="hidden" name="id_barang" id="" value="<?= $barang['id_barang'] ?>">
    <table class="visual-hidden">
      <tr>
        <td>Nama Barang</td>
        <td>:</td>
        <td><input type="text" name="nama_barang" id="" class="from form-control" value="<?= $barang['nama_barang'] ?>" readonly style="background-color: red;"></td>
      </tr>
      <tr>
        <td>Stok Barang</td>
        <td>:</td>
        <td><input type="text" name="stok_barang" id="" class="from form-control" value="<?= $barang['stok_barang'] ?>"></td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td><input type="text" name="harga_barang" id="" class="from form-control" value="<?= $barang['harga_barang'] ?>" readonly style="background-color: red;"></td>
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