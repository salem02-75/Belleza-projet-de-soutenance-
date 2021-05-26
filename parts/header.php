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
    

    <!-- CSS font-Awesome version 5.15.3 -->
    <!-- Lien : https://fontawesome.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- mes styles CSS -->
    <link rel="stylesheet" href="style/style.css">
    <!-- pour les pages services -->
    <link rel="stylesheet" href="style/service.css">
     <!-- pour la page membre -->
    <link rel="stylesheet"  type="text/css" href="style/membre.css">
    <link rel="stylesheet" type="text/css" href="style/membre.scss">
     <!-- pour la page inscription -->
    <link rel="stylesheet" href="style/inscription.css">
     <!-- pour la page connection -->
    <link rel="stylesheet" href="style/connection.css">


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
            <a class="navbar-brand logo-image" href="//<?php echo __ENDPOINT__ ?>/index.php"><img src="images/Logomarque.svg"
                    alt="logo de la marque  Belleza"></a>
        </div>


        <!-- le burger => sm-->
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- NAV -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--  ml-auto => placer a droite -->
            <ul class="navbar-nav ml-auto">
                <!-- #coiffure => active -->

                <li class="nav-item ">
                   
                <li class="nav-item active">
                    <a class="nav-link text-white" href="coiffure.php">Coiffure</a>

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
   