<?php

//koneksi
include "config.php";

//ambil data yang dikirim oleh v_login
$username_login = $_POST['username_login'];
$password_login = $_POST['password_login'];

//cek datanya di database / ditabel tb_login
$sql = mysqli_query($koneksi, "SELECT * FROM tb_login WHERE username_pengguna='$username_login' AND password_pengguna='$password_login'");

// variabel hasil=0 kalau tidak ada, hasil=1 kalau ada
$hasil = mysqli_num_rows($sql);

//cek kondisi
if ($hasil > 0) {
  //abmil data user yang login
  $data = mysqli_fetch_assoc($sql);

  //cek kondisi status
  if ($data['status'] == "Administrator") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'admin';
    //nama pengguna dan id pengguna
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
    $_SESSION['id_login'] = $data['id_login'];

    //ke halaman administrator
    header('location: administrator/index.php');
  } else 
   if ($data['status'] == "Petugas") {
    //buat session untuk security 
    session_start();
    $_SESSION['login'] = 'petugas';
    //nama pengguna dan id pengguna
    $_SESSION['nama_pengguna'] = $data['nama_pengguna'];
    $_SESSION['id_login'] = $data['id_login'];

    //ke halaman petugas
    header('location: petugas/index.php');
   }
  }else{
    echo "<script>alert('username dan password yang anda masukka salah.Silahkan coba lagi')</script>";
    include('index.php');
}