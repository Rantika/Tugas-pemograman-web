<?php 
session_start();

if (isset($_SESSION['login'])) {
    echo "<script>alert('Logout Dahulu');</script>";
    echo "<script>window.location.replace('dashboard.php');</script>";
}
include "config.php";

if(isset($_POST["login"])){
    $email = $_POST['email'];
    $password= $_POST['password'];

    // $sql = "SELET* FROM login WHERE email = '$email' AND password = '$password'";

    // $query = $cnn->query($sql);

    // $result = $query->fetch_assoc(); 

    $ambil = $con->query("SELECT * FROM login WHERE email ='$email' AND password = '$password'");

    if (mysqli_num_rows($ambil) === 1) {
        $row = mysqli_fetch_assoc($ambil);
        
        $_SESSION['login'] = true;
        $_SESSION['email'] = $row['email'];
        $_SESSION['id_login'] = $row['id_login'];
        echo "<script>alert('Berhasil Login');</script>";
        echo "<script>window.location.replace('dashboard.php');</script>";
    } else {
        echo "<script>alert('Gagal Login');</script>";
        echo "<script>window.location.replace('login.php');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <label>Email</label><br>
            <input type="text" name="email"><br>
            <label>Password</label><br>
            <input type="password" name="password"><br>
            <button type="submit" name="login">Log in</button>
        </form>
    </div>     
</body>
</html>