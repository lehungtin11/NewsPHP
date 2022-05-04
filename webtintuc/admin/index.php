<?php
    session_start();
    if(!isset($_SESSION['dangnhap'])) {
        header("Location:login.php");
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-6.1.1/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="https://webtintuc.com/assets/images/3-Favicon.png">
    <link rel="stylesheet" href="css/styleadmin.php">
    <title>Web - Admin</title>
</head>
<body>
<h1 class="hello">
    Welcome to AdminNews
</h1>
<div class="grid">
    <?php 
        include ('./config/config.php');
        include ('./modules/header.php');
        include ('./modules/navbar.php');
        include ('./modules/main.php');
        include ('./modules/footer.php');
    ?>
</div>

</body>
</html>