<?php

$pdo = null ;
$dsn = 'mysql: host=localhost; dbname=table_profil' ;
$dbUser= 'admin';
$pw = '0000';

try {

    $pdo = new PDO($dsn ,$dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){
    echo 'Connection Failed: ' . $e->getMessage();
}

//$pdo->query("SET NAMES UTF8);//Solution encodage UTF8
return $pdo;

?>