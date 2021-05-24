<?php
include 'parts/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Avis</h1>
    <?php
    $servername = 'localhost';
    $username = 'admin';
    $password = '0000';

    //On établit la connexion
    $conn = new mysqli($servername, $username, $password);

    //On vérifie la connexion
    if ($conn->connect_error) {
        die('Erreur : ' . $conn->connect_error);
    }
    echo 'Connexion réussie';


    //on définit notre variable pour pouvoir inclure les fichier
    define("C2SCRIPT", "peut être n'importe quoi ici");

    //on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
    $BDD = array();
    $BDD['serveur'] = "localhost";
    $BDD['login'] = "admin";
    $BDD['pass'] = "000";
    $BDD['bdd'] = "admin";
    ?>
    <!DOCTYPE html>
    <html>

    