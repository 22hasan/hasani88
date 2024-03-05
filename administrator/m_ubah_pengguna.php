<?php
//ambil koneksi
include "../config.php";

//terima kiriman data dari v_ubah_pengguna.php
$id_login = $_POST['id_login'];
$nama_pengguna = $_POST['nama_pengguna'];
$username_pengguna = $_POST['username_pengguna'];
$password_pengguna = $_POST['password_pengguna'];
$status = $_POST['status'];

//simpan hasil ubah ke tb_login
$sql = mysqli_query($koneksi, "UPDATE tb_login SET id_login='$id_login',                                nama_pengguna='$nama_pengguna',username_pengguna='$username_pengguna',password_pengguna='$password_pengguna',                 status='$status'                                                WHERE id_login='$id_login'");

//jika berhasil kembali ke halaman v_registrasi.php
if ($sql) {
  header('location: v_registrasi.php');
}
