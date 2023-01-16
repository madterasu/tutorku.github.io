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
            <li><a href="index.php">Home</a></li>
            <li><a href="#kontak" class="active">Hubungi Kami</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li style="float:right">
              <a class="active" href="form-login.php">Login</a>
            </li>
        </ul>
    </div>
      <div class="kontak_container">  
        <form id="kontak" action="" method="post">
          <h1>Hubungi Kami</h1>
          <fieldset>
            <input placeholder="Nama Lengkap *" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Alamat Email *" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Nomor Telepon *" type="text" tabindex="3">
          </fieldset>
          <fieldset>
            <input placeholder="Alamat Lengkap *" type="text" tabindex="4">
          </fieldset>
          <fieldset>
            <textarea placeholder="Tuliskan pesanmu disini.... *" tabindex="7" required></textarea>
          </fieldset>
          <fieldset>
            <button name="submit" type="submit" id="kontak-button" data-submit="...Sending">Kirim</button>
          </fieldset>
        </form>
      </div>
      <div class="footer">
        <h2>Copyright© 2023 Achmad | Alif</h2>
      </div>
</body>
</html>