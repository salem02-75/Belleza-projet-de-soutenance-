<!-- tronque est une fonction qui ajoute " ... " a la fin d'un texte -->
<?php
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