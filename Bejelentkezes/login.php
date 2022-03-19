<?php

$host="localhost";
$user="root";
$password="asd";
$db="belepes";

session_start();

$data=mysqli_connect($host, $user, $password, $db);
if($data===false)
{
    die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $nev=$_POST["nev"];
    $kod=$_POST["kod"];

    $sql="select * from felhasznalok where nev='".$nev."' AND kod='".$kod."' ";

    $result=mysqli_query($data,$sql);

    $row=mysqli_fetch_array($result);

    if($row["jog"]=="user")
    {
        $_SESSION["nev"]=$nev;

        header("location:home.php");
    }
    
    elseif($row["jog"]=="admin")
    {
        $_SESSION["nev"]=$nev;
        
        header("location:adminhome.php");
    }

    else
    {
        echo "nev or kod incorrect";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
    
        <center>
                <h1>Login Form</h1>
            <br><br><br><br>
                <div style="background-color: grey; width: 500px;" >
            <br><br>
            <form action="#" method="POST">
                <div>
                    <label>username</label>
                    <input type="text" name="nev" required> 
                </div>
            <br><br>
                <div>
                    <label>password</label>
                    <input type="password" name="kod" required> 
                </div>
            <br><br>
                <div>
                    <input type="submit" value="Login">
                </div>
            </form>
            <br><br>
                </div>
        </center>
    </body>
</html>