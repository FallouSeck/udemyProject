<?php
    
    // declaration des variables et initiation à vide

    $pseudo = $pass = $pass2 = $email = $pass_hache = $success = "";
    $pseudoError = $passError = $pass2Error = $emailError = $passwordError = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") 
    {

    // sécurisation des variables

        $pseudo = verifyInput($_POST['pseudo']);
        $pass = verifyInput($_POST['pass']);
        $pass2 = verifyInput($_POST['pass2']);
        $email = verifyInput($_POST['email']);
        $pass_hache = verifyInput($_POST['pass']);
    
    // Vérification que les champs soient remplis

        if (empty($pseudo)) 
        {
            $pseudoError = "Veuillez insérer un pseudo";
        }
        if (empty($pass)) 
        {
            $passError= "Créez un mot de passe";
        }
        if (empty($pass2)) 
        {
            $pass2Error = "Confirmez votre mot de passe";
        }
        if (empty($email)) 
        {
            $emailError = "Veuillez renseigner votre adresse email";
        }
        if ($pass !== $pass2) 
        {
            $passwordError = "Veuillez saisir des mots de passe identique !";
        }
        else            // hachage du mot de passe
        {
            $pass_hache = $pass;

            $pass_hache = password_hash($pass, PASSWORD_DEFAULT);
        }
        if (!empty ($pseudo) AND !empty($pass) AND !empty($pass2) AND !empty($email) AND $pass == $pass2) 
        {

            // connexion à la base de données

            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            }
            catch (Exception $e)
            {
                    die('Erreur : ' . $e->getMessage());
            }

        // Vérification si l'e-mail existe dans la base de donnees

            $req = $bdd->prepare('SELECT email
                                FROM membres 
                                WHERE email = :email');
            $req->execute(array(
                ':email' => $email));
            $donnees = $req->fetch();
            if ($donnees) // Si une valeur est retournée c'est qu'un membre possède déjà le pseudo.
            {
                echo 'Cet email est déja associé à un compte. Veuillez en utiliser un autre !';
            }
            else // Insertion dans la base de données puis affichage d'un meaasage de confirmation
            {     
                $req = $bdd->prepare('INSERT INTO membres(pseudo, pass, email, date_inscription)
                            VALUES (:pseudo, :pass, :email, CURDATE())');
                $req->execute(array(
                    'pseudo' => $pseudo,
                    'pass' => $pass_hache,
                    'email' => $email,
                ));
                $success = "Votre compte a bien été  créé. Cliquez sur ce <a href='connexion.php'>lien</a> pour vous connecter.";
        }

            $pseudo = "";
            $pass = "";
            $pass2 = "";
            $email = "";
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inscription</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" role="form">

        <label for="pseudo" name="pseudo">Pseudo</label>
        <input type="text" name="pseudo" placeholder="Entrez votre pseudo" value="<?php echo $pseudo ?>"> <br>
        <p class="comment"><?php echo $pseudoError; ?></p>

        <label for="pass">Mot de passe</label>
        <input type="password" name="pass" placeholder="Saisissez un mot de passe" value="<?php echo $pass ?>"> <br>
        <p class="comment"><?php echo $passError ?></p>

        <label for="pass2">Confirmation du mot de passe</label>
        <input type="password" name="pass2" placeholder="Confirmez le mot de passe" value="<?php echo $pass2 ?>"> <br>
        <p class="comment"><?php echo $pass2Error ?></p>

        <label for="email">Adresse email</label>
        <input type="email" name="email" placeholder="Entrez votre email" value="<?php echo $email ?>"> <br>
        <p class="comment"><?php echo $emailError ?></p>

        <p><?php echo $passwordError; echo $success ?></p>

        <input type="submit" value="Valider">
    
    </form>
</body>
</html>