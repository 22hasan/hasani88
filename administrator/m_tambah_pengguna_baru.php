<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_tambah_pengguna_baru.php
$nama_pengguna = $_POST['nama_pengguna'];
$username_pengguna = $_POST['username_pengguna'];
$password_pengguna = $_POST['password_pengguna'];
$status = $_POST['status'];

//simpan data ke tb_login
$sql = mysqli_query($koneksi, "INSERT INTO tb_login VALUES(Null,'$nama_pengguna','$username_pengguna','$password_pengguna','$status')");


//jika berhasil maka kembali ke halaman v_registrasi.php
if ($sql) {
  header('location: v_registrasi.php');
}
