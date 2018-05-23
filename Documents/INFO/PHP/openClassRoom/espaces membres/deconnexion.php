<?php

session_start();
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}




$_SESSION = array();

session_destroy();



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<span>Vous avez été déconnecté ! Pour vous reconnecter cliquez <a href="connexion.php">ici</a>.</span>

</body>
</html>