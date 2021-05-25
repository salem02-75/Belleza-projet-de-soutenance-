<!-- Permet de se connecter à la database -->
<?php

function db_connect()
{
  $dns = 'mysql:dbname=admin;host=localhost; charset=utf8';
  $user = 'admin';
  $password = '0000';

  try {
    $dbh = new PDO($dns, $user, $password);
    return $dbh;
  } catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
  }
}

function request_sql($dbh, $sql)
{
  $request = $dbh->prepare($sql);
  if ($request->execute()) {
    $res = $request->fetchAll();
  } else {
    $res = ["error" => "don't know error"];
  }
  return $res;
}
