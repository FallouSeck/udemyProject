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

<?php
 
    $req = $bdd->query('SELECT id, titre, contenu,
                        DATE_FORMAT (date_creation, "%d/%m/%Y à %Hh%imin%ss") AS dte
                        FROM billets
                        ORDER BY date_creation DESC
                        LIMIT 0, 5');

    while($donnees = $req->fetch())
    {
?>

<div class="news">

    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em> le <?php echo htmlspecialchars($donnees['dte']); ?> </em>
    </h3>

    <p>
        <?php echo nl2br(htmlspecialchars($donnees['contenu'])) .'<br>';?>
        <a href="commentaires.php?billet=<?php echo $donnees['id'];?>"><em>Commentaires</em></a>
    </p>

</div>
    <?php 
    }
    $req->closeCursor();
    ?>

</body>
</html>