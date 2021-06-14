<?php

session_start();
if (!isset($_SESSION['login'])) {
    echo "<script>alert('Login Dahulu');</script>";
    echo "<script>window.location.replace('login.php');</script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    
    <!--header-->

    <header>
        <div class="container">
        <h1><a href="dashboard.php">Toko IKan</a></h1>
        <ul>
            <li><a  href="dashboard.php">Dashboard</a></li>
            <li><a  href="profil.php">Profil</a></li>
            <li><a  href="kategori.php">Data Kategori</a></li>
            <li><a  href="produk.php">Data Produk</a></li>
            <li><a  href="logout.php">Logout</a></li>
        </ul>
        </div>
    </header>

    <!--konten-->

     <div class="section">
     <div class="container">
        <h3>Dashboard</h3>
        <div class="box">
            <h4>SELAMAT DATANG</h4>
        </div>
     </div>
     </div>
    <!--FOOTER-->
      <footer>
          <div class="container">
              <small>Copyright & Copy-Toko Ikan Kel 10</small>
          </div>
      </footer>   
</body>
</html>