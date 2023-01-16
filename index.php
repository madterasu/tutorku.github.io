<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Basic&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Basic&display=swap'); </style>
    <link rel="stylesheet" href="style.css">
    <title>Tutorku</title>
</head>
<body>
    <div class="navbar">
        <ul>
            <li><a href="index.html" class="active">Home</a></li>
            <li><a href="kontak.php">Hubungi Kami</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li style="float:right">
              <a class="active" href="form-login.php">Login</a>
            </li>
        </ul>
    </div>
    <div class="header">
        <h1>TutorKu . . .</h1>
      </div>
      
      <div class="row">
        <div class="leftcolumn">
          <?php 
            include 'koneksi.php';
            $hasil = mysqli_query($conn, "select * from postingan");
            while ($data=mysqli_fetch_array($hasil)){
          ?>
          <div class="card">
            <h2>
            <a href="index.php"><?php echo $data["judul_post"]; ?></a>
            </h2>
            <h5><?php echo $data["tgl_post"]; ?></h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>
            <?php echo $data['desk_post']; ?>
            </p>
          </div>
        <?php } ?>
        </div>

        <div class="rightcolumn">
          <div class="card">
            <h2>Tentang</h2>
            <div class="fakeimg" style="height:100px;"></div>
            <p>Kami menyediakan berbagai informasi dan video tutorial untuk memandu Anda menggunakan berbagai layanan sistem dan teknologi informasi di lingkungan mahasiswa. Silakan hubungi jika ada pertanyaan ya!</p>
          </div>
          <div class="card">
            <h3>List Postingan</h3>
            <?php 
            include 'koneksi.php';
            $hasil = mysqli_query($conn, "select * from postingan");
            while ($data=mysqli_fetch_array($hasil)){
          ?>
            <ul>
              <li><a href="#"><?php echo $data["judul_post"]; ?></a></li>
            </ul>
          <?php } ?>
          </div>
          <div class="card">
            <h3>Follow Me</h3>
            <a href="www.instagram.com">Instagram</a>
            <a href="www.facebook.com">Facebook</a>
            <a href="www.youtube.com">Youtube</a>
          </div>
        </div>
      </div>
      
      <div class="footer">
        <h2>Copyright© 2023 Achmad | Alif</h2>
      </div>
</body>
</html>