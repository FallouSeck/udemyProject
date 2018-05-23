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

<p>Derniers billets du blog :</p>

<div class="news">
    <h3>
        <?php
        
            $reponse = $bdd->query('SELECT titre,
                                    DATE_FORMAT(date_creation, "%d/%m/%Y") AS dte,
                                    DATE_FORMAT(date_creation, "%Hh%imin%ss") AS hour
                                    FROM billets
                                    WHERE id = 1');
            $donnees = $reponse->fetch();
            echo htmlspecialchars($donnees['titre']) . '<em> le ' . htmlspecialchars($donnees['dte']) . ' à ' . htmlspecialchars($donnees['hour']) . '</em>';
            $reponse->closeCursor()

        ?> 
    </h3>

    <p>
        <?php
            $reponse = $bdd->query('SELECT contenu 
                                    FROM billets
                                    WHERE id = 1');
            $donnees = $reponse->fetch();
            echo htmlspecialchars($donnees['contenu']) . '<br>';
            $reponse->closeCursor()
        ?>
        <a href="commentaires.php"><em>Commentaires</em></a>
    </p>
</div>

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


    
</body>
</html>