<?php


$dns = 'mysql:dbname=admin;host=localhost';
$user = 'admin';
$password = '0000';

try {
  $dbh = new PDO($dns, $user, $password);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}

$sql = "SELECT * FROM `esthetiques` ";
$request = $dbh->prepare($sql);

if ($request->execute()) {
  $res = $request->fetchAll();
} else {
  $res = ["error" => "undon't know error"];
}



?>

