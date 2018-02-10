<?php


    try
    {
        $database = new PDO('mysql:host=localhost;dbname=store;charset=utf8','root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    catch(Exception $e)
    {
        die('ERROR: '.$e->getMessage());
    }

    $sql = $database->prepare('INSERT INTO customers(first_name, last_name) VALUES(?, ?)');

    $firstName = "Serigne Saliou";
    $lastName = "Seck";

    $sql->execute(array($firstName, $lastName));


?>