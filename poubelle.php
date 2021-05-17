<?php

$dns = 'mysql:dbname=base_donnee_guillaume;host=localhost';
$user = 'root';
$password = '';

try {
  $dbh = new PDO($dns, $user, $password);
} catch (PDOException $e) {
  echo 'Connexion échouée : ' . $e->getMessage();
}

$sql = "SELECT * FROM `Film_lists_guillaume` ";
$request = $dbh->prepare($sql);

if ($request->execute()) {
  $res = $request->fetchAll();
} else {
  $res = ["error" => "undon't know error"];
}





function tronque($chaine, $max)
{
  // Nombre de caractère
  if (strlen($chaine) >= $max) {
    // Met la portion de chaine dans $chaine
    $chaine = substr($chaine, 0, $max);
    // position du dernier espace
    $espace = strrpos($chaine, " ");
    // test si il ya un espace
    if ($espace)
      // si ya 1 espace, coupe de nouveau la chaine
      $chaine = substr($chaine, 0, $espace);
    // Ajoute ... à la chaine
    $chaine .= '...';
  }
  return $chaine;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Films Guillaume</title>
</head>

<body class='container-fuild px-5'>
  <h1 class="mx-3">fiche de films </h1>
  <div class="d-flex flex-column ">
    <?php for ($i = 0; $i < count($res); $i++) : ?>

      <div class="gridpercase">
        <div>
          <img class="imgtaille" src="<?php echo $res[$i]["img"] ?>" alt="">
        </div>
        <div class="margininfo">
          <a href="film.php?id=<?php echo $res[$i]["id"] ?>">
            <h4>
              <?php echo utf8_encode($res[$i]["title"]) ?>
            </h4>
          </a>



          
          <p maxlength="10">

            <?php

            echo tronque(utf8_encode($res[$i]["synopsis"]), 100);


            ?>
          </p>
        </div>
      </div>

      <hr>
    <?php endfor; ?>
  </div>
</body>





<style>
  body {
    margin: 30px auto 0 auto;
    width: 60vw;
  }
  .imgtaille{
    width: 100%;
  }
  .gridpercase{
    display: grid;
    grid-template-columns: 10% auto;
  }
  hr{
    margin: 30px 150px 30px 20px;
  }
  .margininfo{
    margin-left: 40px;
  }
</style>

</html>