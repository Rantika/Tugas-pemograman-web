
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login| Toko Online</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

</head>
<body id="bg-login">
    <div class="box-login">
        <h2>Login</h2>
        <form action="" method="POST">
            <input type="text" name="user" placeholder="username" class="input-control">
            <input type="password" name="pas" placeholder="password" class="input-control">
            <input type="submit" name="submit" value="login" class="btn">
        </form>
        <?php
      
     include "koneksi.php";
    $sql = "SELECT * FROM tb_admin";
    $result = mysqli_query($cnn, $sql);
    mysqli_close($cnn);

    ?>
    </div>
</body>
</html>