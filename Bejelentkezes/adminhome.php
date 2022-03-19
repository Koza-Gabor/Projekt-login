<?php
session_start();
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adminhome</title>
</head>
<body>
    <h1>Hello, This is admin home page</h1><?php echo $_SESSION["nev"] ?>
    <br><br>
    <a href="kijelentkezes.php">Kijelentkezés</a>
</body>
</html>