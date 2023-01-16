<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];

$hasil = mysqli_query($conn, "select * from admin where username='$username' and password='$password'");
while ($data=mysqli_fetch_array($hasil))
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmad Muhardian Personal Website</title>
</head>

<body>
    <nav>
        <a href="index.html">Home</a> |
        <a href="cv-dian.pdf">Download CV</a> |
        <a href="contact.html">Contact</a> |
        <a href="about.html">About me</a>
    </nav>

    <hr />

    <header style="text-align: center;">
        <img src="icon.png" width="200" height="200" style="border-radius: 50%;"/>
        <h1>Selamat Datang Di Halaman Admin</h1>
    </header>

    <hr />
    <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Postingan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $hasil = mysqli_query($conn, "select * from postingan");
            while ($data=mysqli_fetch_array($hasil)) {
                echo "<tr>";
                echo "<td>" . $data["judul_post"] . "</td>";
                echo "<td>" . $data["tgl_post"] . "</td>";
                echo "<td>";
                echo "<a href='form_edit.php?id_post=".$data['id_post']."'>Edit</a> | ";
                echo "<a href='hapus_mhs.php?id_post=".$data['id_post']."' Onclick=\"return confirm('Anda Yakin Menghapus?')\">Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <hr>
    <footer style="text-align: center;">
        <p>Copyright &copy; 2023 Achmad | Alif.</p>
    </footer>
</body>
</html>