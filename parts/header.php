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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


    <!-- mes styles CSS -->
    <link rel="stylesheet" href="style/style.css">

     <!-- icons (éseaux sociaux)-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     
    <!-- css Footer -->
    <link rel="stylesheet" href="style/footer.css">

    <title> <?php $title_belleza ?> </title>
    </head>

<body>
    <header>
        <!-- ========================================= -->
        <!-- Navbar start -->
        <!-- ========================================= -->
        <div class="container">
            <nav class="navbar  navbar-expand-lg navbar-light">

                <!-- logo -->
                <a href="/index.php" class="logo">
                   <img src="images/Logomarque.svg" class="logo-image" alt="logo de Belleza"> 
                </a>
                

                <!-- ml-auto : margin left automatique mettra le bouton à droite -->
                <!-- aria-controls : pour l'accessibilité //  aria-expanded="false" : on démarre avec le menu qui n'est pas étendu donc on démarre à false // navbar-toggler-icon le .svg du burger-->
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- collapse navbar-collapse : pour le masquer ou pas // id="navbarToggler" qui est ciblé plus haut ds data-target-->
                <div class="collapse navbar-collapse " id="navbarToggler">
                    <!-- d-flex : tout est flex dans la ul // justify-content-center align-items-center centré horizontalement et verticalement -->
                    <ul class="navbar-nav  d-flex justify-content-center align-items-center ml-auto">
                        <li class="nav-item">
                            <a href="coiffure.php" class="nav-link active  bg-dark text-white font-weight-bold">Coiffure</a>
                        </li>
                        <li class="nav-item">
                            <a href="esthetique.php" class="nav-link text-white font-weight-bold">Esthétique</a>
                        </li>
                        <li class="nav-item">
                            <a href="massage.php" class="nav-link text-white font-weight-bold">Massage</a>
                        </li>
                    </ul>

                    <!-- espace de connecxion -->
                    <ul class="navbar-nav  d-flex justify-content-center align-items-center">
                        <li class="nav-item">
                            <a href="#services" class="nav-link text-white font-weight-bold">Pro</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link text-white font-weight-bold">Conexion</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>