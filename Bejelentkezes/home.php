<?php 
session_start();

if( !isset($_SESSION['nev']) or empty($_SESSION['nev']) )
{
     header("Location: login.php");
     exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nev']; ?></h1>
     <a href="kijelentkezes.php">Kijelentkezés</a>
</body>
</html>