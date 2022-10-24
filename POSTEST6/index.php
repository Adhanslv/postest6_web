<?php
date_default_timezone_set('asia/makassar');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tampilan/style.css">
    <script src="https://kit.fontawesome.com/6acc3fbd7c.js" crossorigin="anonymous"></script>
    <title>WIND STORE</title>
    <link rel="icon" href="https://www.freepnglogos.com/uploads/honda-logo-png/honda-motorcycles-logo-wing-10.png">
</head>
<body> 
    <div class="navbar">
        <ul>
            <li class="pertama">Wind</li>
            <li class="kedua">Store</li>
            <li><a href="about.php" onclick="return confirm('Pindah Halaman?')"><i class="fas fa-user"></i> About</a></li>
            <li><a href="data_sepeda/index.php"><i class="fa-solid fa-book-tanakh"></i> Data</a></li>
            <!-- <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li> -->
        </ul>
    </div>
    <div class="gambar">
        <img src="tampilan/gambar/gambar1.jpeg" class="gambar1">
        <img src="tampilan/gambar/gambar2.jpeg" class="gambar2">
        <img src="tampilan/gambar/gambar3.jpeg" class="gambar3">
        <img src="tampilan/gambar/gambar4.jpeg" class="gambar4">
    </div>
    <h3 class="section-title"><i class="fa-solid fa-bicycle"></i> Jenis Sepeda</h3>
    <div class="bungkus">
        <div class="card">
            <img src="tampilan/gambar/polygon.png " alt="polygon" >
            <div class="container">
                <i onclick="myFunction(this)" class="fa fa-light fa-heart"s></i>
                <h4><b>Polygon </b></h4>
                <p>Rp 1.500.000</p>
                <a href="polygon/index.php"><button onclick="return confirm('Beli Sekarang ?')"><i class="fas fa-shopping-cart" ></i> Beli Sekarang</button></a>
            </div>
        </div>
        <div class="card">
            <img src="tampilan/gambar/polygon.png" alt="wimcyle" >
            <div class="container">
                <i onclick="myFunction(this)" class="fa fa-light fa-heart"s></i> 
                <h4><b>Cervelo</b></h4>
                <p>Rp 1.600.000</p>
                <a href="cervelo/index.php"><button onclick="return confirm('Beli Sekarang ?')"><i class="fas fa-shopping-cart" ></i> Beli Sekarang</button></a>
            </div>
        </div>
        <div class="card">
            <img src="tampilan/gambar/fixie-polygon.png" alt="Fixied-Gear">
            <div class="container">
                <i onclick="myFunction(this)" class="fa fa-light fa-heart"s></i> 
                <h4><b>Fixied-Gear</b></h4>
                <p>Rp 2.500.000</p>
                <a href="fixie/index.php"><button onclick="return confirm('Beli Sekarang ?')"><i class="fas fa-shopping-cart" ></i> Beli Sekarang</button></a>
            </div>
        </div>
   </div>
    <div class="footer">
        <div class="footer-logo1">Sos</div>
        <div class="footer-logo2">Med</div>
        <div class="footer-list">
            <ul>
                <li><a href="https://wa.me/6281254424739"><i class="fa1 fas fa-phone"></i> Contact</a></li>
                <li><a href="https://twitter.com/Cnoxerr12345"><i class="fa1 fa-brands fa-twitter"></i> Twiter</a></li>
                <li><a href="https://www.instagram.com/ash4rr/"><i class="fa1 fa-brands fa-instagram"></i> Instagram</a></li>
                <p class="time">   <?=date("d-m-Y")?> ---  <?=date("h:i")?></p>
            </ul>
        </div>
    </div>
   <script src="javascript/script.js"></script>
</body>
<style>
    .time{
        text-align:center;
    }
</style>
</html>