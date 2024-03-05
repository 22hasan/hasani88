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
  <title>Petugas</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css "> 
</head>

<body >
  <?php include "navbar.php"; ?>
  <div class="container">
  <h1>DASSBOARD</h1>
  <img src="../yoi.avif" alt="" height="250px" width="300px">
  <div class="card">
  <div class="card-header">
    ID: <?= $_SESSION['id_login']; ?>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>PENGGUNA</p>
      <footer class="blockquote-footer"><?= $_SESSION['nama_pengguna']; ?> <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
</div>
   <!-- <div class="container">
    <h1>Dasboart</h1>
    <img src="" alt="" class="">
     <div class="card-header">
     </div>
     <div class="card-body">
      <blockquote class="blocquote mb-0">
        <p>pengguna</p>
        <footer class="blocquote-footer"></footer>
      </blockquote>
     </div>
   </div>
  <script src="../js/bootstrap.min.js"></script> -->
</body>

</html>