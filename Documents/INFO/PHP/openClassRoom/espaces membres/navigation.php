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

if(isset($_SESSION['pseudo']) AND isset($_SESSION['email']) AND isset($_SESSION['id']))
{


?>

	<!DOCTYPE html>
	<html>
	<head>
	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <title>Page Title</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	    <script src="main.js"></script>
	</head>
	<body>

		<p>
			Salut <?php echo $_SESSION['pseudo']; ?>, comment vas-tu? <br>
			Ton email c'est bien <?php echo $_SESSION['email']; ?> ? <br>
			Ton id c'est <?php echo $_SESSION['id']; ?> <br> <br>
			Tu peux cliquer sur ce lien pour des offres très intéressante <a href="https://www.google.com">Yo</a> ! <br> <br> <br>
		</p>

		<span><a href="profil.php">Profil</a></span> <br><br><br>

		<a href="deconnexion.php">Déconnexion</a>
<?php
}
else
{
	header('Location: connexion.php');
	echo "Il n'y a pas de connexion.";
}
?>
  
</body>
</html>