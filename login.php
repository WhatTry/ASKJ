<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>SKAGATA</title>
    <link rel="icon" type="image/x-icon" href= "gambar/logosmk3yk.png">
    <meta charset="UTF-8">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup" style="text-align: center;">
            <form onsubmit="return validasi(this)" class="sign-in-form">
                <h2 class="title">‎Login as Admin</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Nama Pengguna" name="username" required />
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Kata Sandi" name="password" required />
                </div>
                <div class="kartu">
                    <button type="button" class="btn btn-default" onclick="window.location='index.php'">Keluar</button>
                     <button  class="btn btn-default" style="margin-right: 6.9px">
                     <a href="admin/dashboard.php" style="text-decoration: none; color: white;">Masuk</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
    
    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h1 style="font-size: 40px;">Selamat Datang!</h1>
                <p>This website is still under development,<br> please be patient</p>
                <img src="gambar/taruna.png" alt="Welcome Image" width="400px" height="577px">
            </div>
        </div>
    </div>
</div>
<script src="../js/login.js"></script>
</body>
</html>
