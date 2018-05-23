<?php 

if(isset($_POST['email']))
{

    $_POST['email'] = htmlspecialchars($_POST['email']);

    if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']))
    {
        echo "L'addresse ".  $_POST['email']  ." est valide !";
    }
    else
    {
        echo "L'adresse ".$_POST['email']." n'est pas conforme veuillez recommencer";
    }

}

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="" method="post">
        <label for="email" name="email"></label>
        <input type="text" name="email">
        <input type="submit" name="" id="">
    </form>
</body>
</html>