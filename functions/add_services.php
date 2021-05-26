<!-- Permet d'insert avec un formulairedans le tab -> avis  -->
<?php

$done = false;

if (
    isset($_POST["nom_societe"]) &&
    isset($_POST["photo"]) &&
    isset($_POST["description"]) &&
    isset($_POST["localisation"]) &&
    isset($_POST["email"])
) {

    $sql = "INSERT INTO 
        $services (`nom_societe`,`photo`,`description`,`localisation`,`email`)
            VALUES 
                ('" . $_POST["nom_societe"] . "',
                '" . $_POST["photo"] . "',
                '" . $_POST["description"] . "',
                '" . $_POST["localisation"] . "',
                '" . $_POST["email"] . "'                
                )";
                

$bdh = db_connect();
$sth = $bdh->prepare($sql);
$done = $sth->execute();

}


?>