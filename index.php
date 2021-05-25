<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Page d"accueil';
include 'parts/header.php';
// Permet d'afficher les avis 
include 'functions/connect.php';
// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM `avis` ";
$res = request_sql($dbh, $sql);
?>



<main>
     <!-- la bnniere -->
     <div class="banniere">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="banniere-body">
                        <h1 class="banniere-title text-white d-flex">Ne <span class="ml-2">B</span>ougez pas, on vient à
                            <span class="ml-2">Vous</span></h1>
                        <p class="banniere-text pt-3">seule, en couple ou
                            en famille pour voud rendre <span>BELLEZA</span></p>

                        <!-- <button><a href="#">Inscrivez vous</a></button> -->
                        <a href="#" class="btn btn-secondary  bg-transparent mr-3 py-2 px-4 mt-4" role="button"
                            aria-pressed="true">Inscrivez vous</a>
                        <a href="#" class="btn btn-secondary  bg-transparent mr-3 py-2 px-4 mt-4" role="button"
                            aria-pressed="true">Rejoignez-vous</a>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- service et avis -->

    <!-- ========================================= -->
    <!-- Services -->
    <!-- ========================================= -->
    <h2 class="service-title text-center  my-5">Nos services</h2>
    <div id="service" class="container">
        <div class="row d-flex justify-content-center ">
            <!-- col-1 -->
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4" >
                <div class="card mb-4" href="coiffure.php">
                    <a href="coiffure.php">
                        <img src="images/coiffure.jpg" alt="image de coiffure, coupe de cheveux" class="card-img-top imgService">
                    </a>

                    <div class="card-body ">
                        <h3 class="card-title-service text-center "><a href="coiffure.php" class="text-decoration-none">Coiffure</a></h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Coupe de cheveux pour femme, homme, enfant.Broshing,
                            Mèches et Coloration, Soin de cheveux,,,
                        </p>
                    </div><!-- fin de card-body -->

                </div><!-- fin de card-->

            </div><!-- fin de col-1 card -->

            <!-- col-12 -->
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4 ">
                <div class="card mb-4">
                    <a href="esthetique.php">
                        <img src="images/esthétique.jpg" alt="image de Esthétique, Maquillage,soin" class="card-img-top imgService">
                    </a>

                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#Esthétique.php" class="text-decoration-none">Esthétique</a></h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Epilation du corps, Epilation homme, femme,
                            Maquillage, Soin du corps, Beauté des pieds et de mains,,,
                        </p>
                    </div><!-- fin de card-body -->

                </div><!-- fin de col-2 card -->

            </div><!-- fin de card-->

            <!-- col-3 -->
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4 ">
                <div class="card mb-4 ">
                    <a href="massage.php">
                        <img src="images/massage.jpg" alt="image de massage" class="card-img-top imgService">
                    </a>

                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="#Massage" class="text-decoration-none">Massage</a>
                        </h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Massage solo ou en couple, Modelage du corps,
                            Ventouse, Pierre chaude,,,
                        </p>
                    </div><!-- fin de card-body -->

                </div><!-- fin de col-3 card -->

            </div><!-- fin de card-->

        </div><!-- fin de row -->

    </div><!-- fin de container service-->

    <!-- ========================================= -->
    <!-- avis -->
    <!-- ========================================= -->
    <div id="avis" class="pb-5 my-100">
        <h2 class="avis-title d-flex justify-content-center mt-5">Les avis de nos <span class="text-danger ml-2">
                fidèles</span></h2>
        <div class="container my-5 ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active ">
                                <div class="row">

                                    <!-- item-1 !-->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Sélo</h3>
                                            <p class=" mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin box-1 -->
                                    </div><!--  fin col-1 -->

                                    <!-- item-2 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon ">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Zaza</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin box-2 -->
                                    </div><!--  fin col-2 -->

                                    <!-- item-3 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Lazhari</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin box-3 -->
                                    </div><!--  fin col-3 -->

                                </div><!-- fin row -->

                            </div><!-- fin carousel-item-1-->

                            <div class="carousel-item  ">
                                <div class="row">

                                    <!-- item-1 !-->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Mérah</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div> <!--  fin box-1 -->
                                    </div><!--  fin col-1 -->

                                    <!-- item-2 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon ">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Guillaume</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin box-2 -->
                                    </div><!--  fin col-2 -->

                                    <!-- item-3 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Eguale</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin box-3 -->
                                    </div><!--  fin col-3 -->


                                </div><!--  fin row -->

                            </div><!-- fin carousel-item-2-->


                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-4">

                                        <!-- item-1 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Pikatcho</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit.
                                                Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin item-1 -->

                                    </div><!--  fin col-1 -->

                                    <div class="col-md-4">
                                        <!-- item-2 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Kadir</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div>
                                    </div><!--  fin item-2 -->

                                    <div class="col-md-4">

                                        <!-- item-3 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                                <i class="fas fa-star text-danger"></i>
                                            </div>
                                            <h3 class="name">Shayn</h3>
                                            <p class="mb-3 text-secondary">Lorem ipsum dolor sit amet, consectetur
                                                adipisicing elit. Facilis
                                                soluta modi,
                                                dolores
                                                magni aut ipsum!</p>
                                        </div><!--  fin item-3 -->

                                    </div><!--  fin col-3 -->
                                </div><!--  fin col-2 -->

                            </div><!--  fin row -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========================================= -->
    <!--    AVIS FIN-->
    <!-- ========================================= -->

    <!-- ========================================= -->
    <!-- ENGZGEMENTS -->
    <!-- ========================================= -->
    <div id="engagement my-150">
        <h2 class="text-center my-5">Nos Engagements</h2>
        <div class="container">
            <div class="row justify-content-center">
                <div class="box-col col-9 col-md-5 col-lg-2 bg-light  border-0 rounded  mx-3 my-4">
                    <img class="img-icon text-center my-3  " src="images/couplee.png" alt="image de couple">
                    <div>
                        <h3 class=" text-center py-3 text-uppercase">Satisfaction</h3>
                        <p class="text-center  pb-3  font-weight-bold">Nos experts seront à la hauteur de vos exigances </p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="box-col col-9 col-md-5 col-lg-2 bg-light  border-0rounded    mx-3 my-4">
                    <img class="img-icon text-center my-3 " src="images/love.png" alt="love">
                    <div>
                        <h3 class=" text-center py-3 text-uppercase">écoute</h3>
                        <p class=" text-center pb-3   font-weight-bold">Nos professionnels seront vos amis </p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="box-col col-9 col-md-5 col-lg-2 bg-light  border-0rounded    mx-3 my-4">
                    <img class="img-icon text-center my-3 " class="text-center" src="images/key.png" alt="cles">
                    <div>
                        <h3 class=" text-center py-3 text-uppercase">Proximité</h3>
                        <p class=" text-center pb-3   font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="box-col col-9 col-md-5 col-lg-2 bg-light  border-0rounded   mx-3 my-4">
                    <img class="img-icon text-center my-3 " src="images/love-2.png" alt="groupe de coeurs">
                    <div>
                        <h3 class=" text-center py-3 text-uppercase">Fidélité</h3>
                        <p class=" text-center pb-3   font-weight-bold">nous réalisons fréquemment des enquètes client</p>
                    </div><!-- col-->
                </div><!-- col-->

            </div><!-- row-->
        </div><!-- container-->
    </div>
    
    <!-- ========================================= -->
    <!-- ENGAGEMENT FIN -->
    <!-- ========================================= -->

    <!-- ========================================= -->
    <!-- Newsletter -->
    <!-- ========================================= -->

    <div id="newsletter" class="container text-white text-center my-150">

        <form action="Newsletter">
            <h1>S'abonner à la newsletter</h1>
            <p class="text-secondary py-1">Restons toujours en contacte avec votre beauté </p>
            <div class="email-body d-flex justify-content-center mt-3">
                <i class="fas rounded-left fa-envelope"></i>
                <input type="email" name="email" value="" placeholder="Entrez votre eamil" class="input-email border-0 ">
                <button type="button" name="button" class="btn btn-outline btn-email  rounded-right text-white text-uppercase border-0 ">Envoyer</button>
                <!-- <div class="from-group">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> -->
            </div>
        </form><!-- from-->
      
    </div><!-- container- newsletter fin-->

    <!-- ========================================= -->
    <!-- Newsletter FIN -->
    <!-- ========================================= -->

</main>




<?php
include 'parts/footer.php';
?>