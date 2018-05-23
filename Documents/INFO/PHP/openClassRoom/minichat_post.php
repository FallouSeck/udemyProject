<?php

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

    $pseudo = $_POST['pseudo'];
    $messages = $_POST['messages'];

    $req = $bdd->prepare('INSERT INTO minichat(pseudo, messages, date_modification) 
                        VALUES(:pseudo, :messages, CURTIME())');
    $req->execute(array(
        'pseudo' => $pseudo,
        'messages' => $messages,
    ));

    echo 'Le message a été bien enregistré !';


header('Location: minichat.php');

?>