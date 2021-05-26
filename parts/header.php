<?php

if ($_SERVER["HTTP_HOST"] === "localhost") {
    define("__ENDPOINT__", 'localhost/Belleza-projet-de-soutenance-');
} else {
    define("__ENDPOINT__", $_SERVER["HTTP_HOST"]);
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- les fontes -->

    <!-- link font belleza -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
    <!--link font Dicact Gothic  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&display=swap" rel="stylesheet">

    <!-- CSS Bootstrap  version 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- CSS Bootstrap version 4.3.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

    <!-- CSS Bootstrap version 5.0.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- CSS Bootstrap version 4.7.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- CSS Bootstrap version 3.3.0 -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- CSS Bootstrap version 4.1.1 -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <!-- jQuery  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <!-- Popper.js 2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- ajax 1.1.0--> 
     <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- ajax 3.2.1 -->
     <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <!-- CSS font-Awesome version 5.15.3 -->
    <!-- Lien : https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <!-- mes styles CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- pour les pages services -->
    <link rel="stylesheet" href="style/service.css">
    <!-- pour la page de membre -->
    <link rel="stylesheet" href="style/membre.css">
    <!-- pour la page de connection-->
    <link rel="stylesheet" href="style/connection.css">
    <!-- pour la page inscription-->
    <link rel="stylesheet" href="style/inscription.css">
    <!-- pour la page playlist-->
    <link rel="stylesheet" href="style/playlist.css">

   <!-- link page js -->
   <script type="text/javascript" src="playlist.js"></script>

    
    

 
  

 

    <title><?php echo $page; ?></title>


</head>

<body>

    <!-- ========================================= -->
    <!-- Navbar start -->
    <!-- ========================================= -->
    <header>


        <nav class="navbar navbar-expand-lg navbar-light bg-navbar shrink">
            <div class="container">

                <!-- logo -->
                <div class="logo">
                    <a class="navbar-brand logo-image" href="//<?php echo __ENDPOINT__ ?>/index.php"><img src="images/Logomarque.svg" alt="logo de la marque  Belleza"></a>
                </div>


                <!-- le burger => sm-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- NAV -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!--  ml-auto => placer a droite -->
                    <ul class="navbar-nav ml-auto">
                        <!-- #coiffure => active -->
                        <li class="nav-item active">
                            <a class="nav-link " href="coiffure.php">Coiffure<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="esthetique.php">Esthétique</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="massage.php">Massage</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="connection.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="inscription.php">Inscription</a>
                        </li>
                    </ul>
                </div>
            </div><!-- container fin-->
        </nav><!-- nav fin -->

    </header>

    </div>