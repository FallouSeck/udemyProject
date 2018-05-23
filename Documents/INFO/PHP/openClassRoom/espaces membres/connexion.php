<?php
// Connection à la base de donnees
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$pseudo = $password = "";
$messageError = "";

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	$pseudo = verifyInput($_POST['pseudo']);
	$password = verifyInput($_POST['password']);

	$req = $bdd->prepare('SELECT *
						FROM membres
						WHERE pseudo = :pseudo');
	$req->execute(array('pseudo' => $pseudo));
	$donnees = $req->fetch();
	$pass = $donnees['pass'];
	$id = $donnees['id'];
	$email = $donnees['email'];

	// Vérification du mot de passe et demarrage de la session
	if (password_verify($_POST['password'], $pass))
	{
		header('Location: navigation.php');
		session_start();
        $_SESSION['pseudo'] = $pseudo;
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
	}
	else
	{
		$messageError = "Le pseudo ou le mot de passe ne sont pas valides !";
	}
}

function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    	<label name="pseudo">Pseudo</label>
    	<input type="text" name="pseudo" placeholder="Entrez votre pseudo" value="<?php echo $pseudo ?>"> <br><br>

		<label name="password">Mot de passe</label>
		<input type="password" name="password" placeholder="Entrez le mot de passe">
		<p><?php echo $messageError ?></p>

		<input type="submit" value="Connexion">	    	
    </form>
</body>
</html>