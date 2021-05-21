<?php

$done = false;

if (
    isset($_POST["name"]) &&
    isset($_POST["contenue"]) &&
    isset($_POST["note"])
) {

    $sql = "INSERT INTO 
        `avis` (`name`,`contenue`,`note`)
            VALUES 
                ('" . $_POST["name"] . "',
                '" . $_POST["contenue"] . "',
                '" . $_POST["note"] . "')";
                

$bdh = db_connect();
$sth = $bdh->prepare($sql);
$done = $sth->execute();

}


?>