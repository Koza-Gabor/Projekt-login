<?php
session_start();
require_once("kapcsolat.php");

if (isset($_POST['kod']))
{

    /*
    function cleaning()
    {
        $rules = array(
            trim(),
            stripslashes(),

        );
    }
    */

    function ervenyesit($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        //$data = $conn->real_escape_string($data);
        return $data;
    }

    $kod = ervenyesit($_POST['kod']);

    if (empty($kod))
    {
        header("Location: login.php?error=Szükséges a Kód!");
        exit();
    }
    else
    {
        $result = $conn->query("SELECT * FROM felhasznalok WHERE kod = '".$kod."' LIMIT 1");

        if( $result->num_rows < 1)
        {
            //nincs felhasználó, vagy helytelen jelszó.
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }


        $userdata = $result->fetch_assoc();

        if($userdata['kod'] != $kod)
        {
            header("Location: login.php?error=Incorect User name or password");
            exit();
        }
        
        $_SESSION['id'] = $userdata['id'];
        $_SESSION['nev'] = $userdata['nev'];

        header("Location: home.php");
        exit();
	}

}
else
{
    header("Location: login.php");
    exit();
}