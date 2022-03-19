<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['nev'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>OTTHON</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <h1>Hello, <?php echo $_SESSION['nev']; ?></h1>
     <a href="kijelentkezes.php">Logout</a>
</body>
</html>

<?php 
}else{
     header("Location: login.php");
     exit();
}
 ?>