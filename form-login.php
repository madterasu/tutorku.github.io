<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Basic&display=swap" rel="stylesheet">
    <style> @import url('https://fonts.googleapis.com/css2?family=Basic&display=swap'); </style>
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="form-login">
        <div data-role="content">
            <center>
                <img src="4beebce89d681837ba2f4105ce43afac.png" width="60">
            </center>
        </div>
        <h1>Admin Login</h1>
        <form class="login-form" action="login.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required>
    
            <label>Password:</label>
            <input type="password" name="password" required>
    
            <input type="submit" value="Masuk" name="login" class="active">
            <a href="index.html">Kembali</a>
        </form>
    </div>
</body>
</html>