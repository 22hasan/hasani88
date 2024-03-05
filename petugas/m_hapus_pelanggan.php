<?php
//ambil koneksi
include "../config.php";

//ambil data id_barang dari URL
$id_pelanggan = $_GET['id_pelanggan'];

$carii = mysqli_query($koneksi, "SELECT * FROM tb_penjualan WHERE id_pelanggan='$id_pelanggan'");

$hasilCari = mysqli_fetch_assoc($carii);

if ($hasilCari['total'] > 0){
  echo "<script>alert('GAGAL HAPUS!!! DATA SUDAH DI PAKAI TRANSAKSI')</script>";
  include('v_penjualan.php');
} else {
  
  
  //hapus barang berdasarkan id_pelanggan
  $data = mysqli_query($koneksi, "DELETE FROM tb_penjualan WHERE id_pelanggan='$id_pelanggan'");
  
  //hapus barang berdasarkan id_pelanggan 
  $sql = mysqli_query($koneksi, "DELETE FROM tb_pelanggan WHERE id_pelanggan='$id_pelanggan'");
  
  
  
  //jika berhasil kembali ke v_penjualan.php
  if ($sql) {
    header('location: v_penjualan.php');
  }
}
  