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

    <?php

        $req = $bdd->prepare('SELECT id, titre, contenu,
                            DATE_FORMAT (date_creation, "%d/%m/%Y à %Hh%imin%ss") AS dte
                            FROM billets
                            WHERE id = ?');
        $req->execute(array($_GET['billet']));
        $donnees = $req->fetch();
    ?>

<div class="news">
    <h3>
        <?php echo htmlspecialchars($donnees['titre']); ?>
        <em> le <?php echo htmlspecialchars($donnees['dte']); ?> </em>
    </h3>
    <p>
        <?php echo nl2br(htmlspecialchars($donnees['contenu']));?>
    </p>
</div>

<h2>Commentaires</h2>

<?php 

    $req->closeCursor();

    $req = $bdd->prepare('SELECT auteur, commentaires,
                        DATE_FORMAT (date_commentaire, "%d/%m/%Y à %Hh%imin%ss") AS dte
                        FROM commentaires
                        WHERE id = ?
                        ORDER BY date_commentaire DESC');
    $req->execute(array($_GET['billet']));
    while ($donnees = $req->fetch())
    {
?>

<p><strong><?php echo htmlspecialchars($donnees['auteur']); ?></strong>
le <?php echo htmlspecialchars($donnees['dte']); ?> </p>

<p><?php echo htmlspecialchars($donnees['commentaires']); ?></p>

<?php
    }
    $req->closeCursor();
?>

</body>
</html>