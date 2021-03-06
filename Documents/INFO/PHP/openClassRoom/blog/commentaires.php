<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Blog de Fadel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>

<h1>Mon super blog !</h1>

<a href="index.php">Retour à la liste des billets</a>

<div class="news">
    <h3>
        <?php
            $reponse = $bdd->query('SELECT titre,
                                    DATE_FORMAT(date_creation, "%d/%m/%Y") AS dte,
                                    DATE_FORMAT(date_creation, "%Hh%imin%ss") AS hour
                                    FROM billets
                                    WHERE id = 2');
            $donnees = $reponse->fetch();
            echo htmlspecialchars($donnees['titre']) . '<em> le ' . htmlspecialchars($donnees['dte']) . ' à ' . htmlspecialchars($donnees['hour']) . '</em>';
            $reponse->closeCursor()    
        ?> 
    </h3>
    <p>
        <?php
            $reponse = $bdd->query('SELECT contenu 
                                    FROM billets
                                    WHERE id = 2');
            $donnees = $reponse->fetch();
            echo htmlspecialchars($donnees['contenu']) . '<br>';
            $reponse->closeCursor()
        ?>
        <a href="commentaires.php"><em>Commentaires</em></a>
    </p>

</div>

<h2>Commentaires</h2>

<?php

$reponse = $bdd->query('SELECT auteur, commentaires, 
                        DATE_FORMAT(date_commentaire, "%d/%m/%Y") AS dte,
                        DATE_FORMAT(date_commentaire, "%Hh%imin%ss") AS hour 
                        FROM commentaires 
                        ORDER BY id ASC ');

while ($donnees = $reponse->fetch())
{
    echo '<strong>' . htmlspecialchars($donnees['auteur']) . '</strong> le ' . htmlspecialchars($donnees['dte']) . ' à ' . htmlspecialchars($donnees['hour']) . '<br><br>' . 
    htmlspecialchars($donnees['commentaires']) . '<br> <br>';
}
$reponse->closeCursor();
?>
