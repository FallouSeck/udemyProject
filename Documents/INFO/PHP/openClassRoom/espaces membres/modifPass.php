<?php
session_start();


// connexion à la base de données

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
            die('Erreur : ' . $e->getMessage());
    }
	
	// déclaration des variables, initialisation à 0

	$password = $newPass = $newPass2 = "";
	$passError = $newPassError = $newPass2Error = $passwordError = "";

	 if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {

    // sécurisation des variables

        $password = verifyInput($_POST['password']);
        $newPass = verifyInput($_POST['newPass']);
        $newPass2 = verifyInput($_POST['newPass2']);

    // Vérification que les champs sont bien remplis

        if (empty($password)) 
        {
            $passError = "Veuillez insérer un pseudo";
        }
        if (empty($newPass)) 
        {
            $newPassError= "Créez un nouveau mot de passe";
        }
        if (empty($newPass2)) 
        {
            $newPass2Error = "Confirmez votre nouveau mot de passe";
        }
        if ($newPass !== $newPass2) 
        {
            $passwordError = "Veuillez saisir des mots de passe identique !";
        }
        else
        {
	        (password_verify($_POST['password'], $password));

        	$req = $bdd->prepare('UPDATE membres SET pass = $newPass WHERE pseudo = :pseudo');
        	$req->execute(array(
        		'pass' => $newPass
        	));
        }
    }


    // fonction de sécurisation des variables

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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<title>Modification Pass</title>
</head>
<body>

	Bonjour <?php echo $_SESSION['pseudo']; ?>, vous pouvez changer votre mot de passe sur cette page. <br><br>
	
	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
		<label name="password">Saisissez votre mot de passe</label>
		<input type="password" name="password">
        <p class="comment"><?php echo $passError; ?></p>

		<label name="newPass">Saisissez votre nouveau mot de passe</label>
		<input type="password" name="newPass"><br>
        <p class="comment"><?php echo $newPassError; ?></p>

		<label name="newPass2">Confirmer mot de passe</label>
		<input type="password" name="newPass2"><br>
        <p class="comment"><?php echo $newPass2Error; ?></p>

		<input class="btn btn-success" type="submit" value="Valider">
	</form>
</body>
</html>