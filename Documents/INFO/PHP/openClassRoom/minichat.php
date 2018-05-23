<?php

    $pseudo = "";

    // Paramétrage du cookie pour le pseudo

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {   
        $pseudo = verifyInput($_POST['pseudo']);
    setcookie('pseudonyme', $pseudo, time() + 365*24*3600, null, null, false, true);
    }

    // Connection a la base de donnees
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Mini Chat</title>
    <link rel="stylesheet" type="text/css" href="style.css" />

</head>
<body>

<form action="minichat_post.php" method="post">

    <label for="pseudo" name="pseudo">Pseudo :</label>
    <input type="text" name="pseudo"  value="<?php echo $_COOKIE['pseudonyme']; ?>">
    <br>

    <label for="messages" name="messages">Message :</label>
    <input type="text" name="messages">
    <br>

    <input type="submit" class="btn btn-primary" value="Envoyer">

</form>

<?php

$reponse = $bdd->query('SELECT pseudo, messages, DATE_FORMAT(date_modification, "[%d-%m-%Y %H:%i:%s]") AS hour FROM minichat ORDER BY id DESC LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{
    echo htmlspecialchars($donnees['hour']) . '<strong> ' . htmlspecialchars($donnees['pseudo']) . ' </strong>: ' . htmlspecialchars($donnees['messages']) . '<br><br>';
}
$reponse->closeCursor();
?>


    
</body>
</html>