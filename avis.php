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

    <head>
        <meta charset="UTF-8">
        <title>Avis</title>

    </head>

    <body>
        <h1>Hello</h1>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Prenom Nom</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group">
            <span class="input-group-text">Ecrivez ici</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <?php
        //on affiche le formulaire pour poster un commentaire
        echo ("avis.php"); // indiquer la page actuelle avec ou sans query du type ?id=123&... et l'id de l'article pour affiche les commentaires de cette article seulement, si vous utilisez ce système de commentaire pour un livre d'or par exemple, vous pouvez l'enlever et mettre seulement la page actuelle: afficherFormulaireCommentaire("page.php");


        ?>




    </body>

    </html>

    <?php
    include 'parts/footer.php';
    ?>