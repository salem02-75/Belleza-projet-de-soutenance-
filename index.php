<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Page d"accueil';
include 'parts/header.php';
// Permet d'afficher les avis 
include 'functions/connect.php';
// lance la fonction de connection a la db
$sql = 'SELECT * FROM avis ORDER BY id DESC';
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$res = request_sql($dbh, $sql);
?>




<main>
    <!-- la bnniere -->
    <div class="banniere">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="banniere-body ml-4 pl-3">
                        <h1 class="banniere-title  d-flex  display-sm-4  display-md-3">Ne bougez pas, on vient à vous</h1>
                        <p class="banniere-text display-sm-4 display-sm-5 pt-3">seule, en couple ou
                            en famille pour vous rendre <span>BELLEZA</span></p>


                        <a href="inscription.php" class="btn btn-outline-secondary text-white bg-transparent mr-3 py-2 px-4 mt-4" role="button" aria-pressed="true">Inscrivez vous</a>




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
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4">
                <div class="card mb-4">
                    <a href="coiffure.php">
                        <img src="images/coiffure.jpg" alt="image de coiffure, coupe de cheveux" class="card-img-top imgService " width=150px>
                    </a>
                    <div class="card-body ">
                        <h3 class="card-title-service text-center "><a href="coiffure.php" class="text-decoration-none">Coiffure</a></h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Coupe de cheveux pour femme, homme, enfant.Broshing,
                            Mèches et Coloration, Soin du cheveux,,,
                        </p>
                    </div>
                </div> <!-- fin de card-1 -->
            </div> <!-- fin de col-1  -->
            <!-- col-2 -->
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4 ">
                <!--  card-2 -->
                <div class="card mb-4">
                    <a href="esthetique.php">
                        <img src="images/esthétique.jpg" role="img" alt="image de Esthétique, Maquillage,soin" class="card-img-top imgService">
                    </a>

                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="esthetique.php" class="text-decoration-none">Esthétique</a></h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Epilation du corps, Epilation homme, femme,
                            Maquillage, Soin du corps, Beauté des pieds et des mains,,,
                        </p>
                    </div>

                </div> <!-- fin de card 2-->

            </div> <!-- fin de col 2 -->

            <!-- col-3 -->
            <div class=" col-9 col-md-6 col-lg-4  mb-sm-4 ">
                <div class="card mb-4 ">
                    <a href="massage.php">
                        <img src="images/massage.jpg" alt="image de massage" class="card-img-top imgService">
                    </a>
                    <div class="card-body">
                        <h3 class="card-title text-center"><a href="massage.php" class="text-decoration-none">Massage</a></h3>
                        <p class="text-center text-secondary ">à Domicile</p>
                        <p class="card-text-service text-secondary">Massage solo ou en couple, Modelage du corps,
                            Ventouse, Pierre chaude,,,
                        </p>
                    </div>
                </div><!-- fin de  card-3 -->

            </div><!-- fin de Col-3 -->

        </div><!-- fin de row -->

    </div><!-- fin de container service-->

    <!-- ========================================= -->
    <!-- avis  en format Sm-->
    <!-- ========================================= -->
    <div class=""></div>
    <div class="avis-sm py-4">
        <div class="color_red_belleza py-4 text-center d-lg-none d-md-none">
            <h2 class=" font-weight-bolder py-3">Ils nous ont fait confiance</h2>
            <p class="text-white">Nos profesionnels nous ont fait confiance, et leurs clients ont adoré</p>
            <p class="text-white">Vous êtes curieux 🧐 de voir leurs avis, c'est par <a href="avis.php" class="text-avis-sm font-weight-bolder">içi</a></p>
        </div>
    </div>

    <!-- ========================================= -->
    <!-- avis  en foemat  MD et LG -->
    <!-- ========================================= -->

    <div id="avis" class="pb-5 my-100">
        <h2 class="avis-title d-flex justify-content-center mt-5">Les avis de nos <span class="text-danger ml-2">
                fidèles</span></h2>
        <div class="container my-5 ">
            <div class="row">
                <div class="col-lg-12 col-md-12">
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
                                                <?php echo $res[0]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[0]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[0]["contenue"] ?></p>
                                            <?php
                                            $date = $res[0]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>

                                        </div><!--  fin box-1 -->
                                    </div><!--  fin col-1 -->

                                    <!-- item-2 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <?php echo $res[1]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[1]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[1]["contenue"] ?></p>
                                            <?php
                                            $date = $res[1]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div><!--  fin box-2 -->
                                    </div><!--  fin col-2 -->

                                    <!-- item-3 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <?php echo $res[2]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[2]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[2]["contenue"] ?></p>
                                            <?php
                                            $date = $res[2]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div><!--  fin box-3 -->
                                    </div><!--  fin col-3 -->

                                </div><!-- fin row -->

                            </div><!-- fin carousel-item-1-->

                            <div class="carousel-item  ">
                                <div class="row ">

                                    <!-- item-1 !-->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <?php echo $res[3]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[3]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[3]["contenue"] ?></p>
                                            <?php
                                            $date = $res[3]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div> <!--  fin box-1 -->
                                    </div><!--  fin col-1 -->

                                    <!-- item-2 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon ">

                                                <?php echo $res[4]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[4]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[4]["contenue"] ?></p>
                                            <?php
                                            $date = $res[4]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div><!--  fin box-2 -->
                                    </div><!--  fin col-2 -->

                                    <!-- item-3 -->
                                    <div class="col-md-4">
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">
                                                <?php echo $res[5]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[5]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[5]["contenue"] ?></p>
                                            <?php
                                            $date = $res[5]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div><!--  fin box-3 -->
                                    </div><!--  fin col-3 -->


                                </div><!--  fin row -->

                            </div><!-- fin carousel-item-2-->


                            <div class="carousel-item ">
                                <div class="row ">
                                    <div class="col-md-4">

                                        <!-- item-1 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">

                                                <?php echo $res[6]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[6]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[6]["contenue"] ?></p>
                                            <?php
                                            $date = $res[6]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div><!--  fin item-1 -->

                                    </div><!--  fin col-1 -->

                                    <div class="col-md-4">
                                        <!-- item-2 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">

                                                <?php echo $res[7]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[7]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[7]["contenue"] ?></p>
                                            <?php
                                            $date = $res[7]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                                        </div>
                                    </div><!--  fin item-2 -->

                                    <div class="col-md-4">

                                        <!-- item-3 -->
                                        <div class="box text-center py-4 px-3">
                                            <div class="icon">

                                                <?php echo $res[8]["note"] ?>
                                            </div>
                                            <h3 class="name"><?php echo $res[8]["name"] ?></h3>
                                            <p class=" mb-3 text-secondary"><?php echo $res[8]["contenue"] ?></p>
                                            <?php
                                            $date = $res[8]["date_creation"];
                                            $timestamp = strtotime($date);
                                            ?>
                                            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
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
            <div class="row d-flex justify-content-center">
                <div class="box-col  col-9 col-md-5 col-lg-2 bg-light border-0 rounded  mx-3 my-4">
                    <div class="d-flex justify-content-center">
                        <img class="img-icon width-40 text-center my-3  " src="images/la-satisfaction.png" alt="image de satisfaction">
                    </div>

                    <div>
                        <h3 class=" text-center py-3 text-uppercase text-danger">Satisfaction</h3>
                        <p class="text-center  pb-3  font-weight-bold">Nos experts seront à la hauteur de vos exigances </p>
                    </div>
                </div><!-- co-1 -->

                <div class="box-col col-9 col-md-5 col-lg-2 bg-light border-0 rounded    mx-3 my-4">
                    <div class="d-flex justify-content-center">
                        <img class="img-icon width-40 text-center my-3 " src="images/ecoutez.png" alt="icon d'ecoute">
                    </div>

                    <div>
                        <h3 class=" text-center py-3 text-uppercase text-danger">écoute</h3>
                        <p class=" text-center pb-3   font-weight-bold">Nos professionnels seront vos amis </p>
                    </div>
                </div><!-- col-2 -->

                <div class="box-col col-9 col-md-5 col-lg-2  bg-light border-0 rounded    mx-3 my-4">
                    <div class="d-flex justify-content-center">
                        <img class="img-icon width-40 text-center my-3 " class="text-center" src="images/radar.png" alt="icon de radar de proxiité">
                    </div>
                    <div>
                        <h3 class=" text-center py-3 text-uppercase text-danger">Proximité</h3>
                        <p class=" text-center pb-3   font-weight-bold">nos professionnels seront toujours disponible et proche de vous.</p>
                    </div>
                </div><!-- col-3 -->

                <div class="box-col col-9 col-md-5 col-lg-2 bg-light  border-0 rounded   mx-3 my-4">
                    <div class="d-flex justify-content-center">
                        <img class="img-icon width-40 text-center my-3 " src="images/carte.png" alt="icon de carte de fidélité ">
                    </div>
                    <div>
                        <h3 class=" text-center py-3 text-uppercase text-danger">Fidélité</h3>
                        <p class=" text-center pb-3   font-weight-bold">nous réalisons fréquemment des enquètes client</p>
                    </div>
                </div><!-- col-3 -->

            </div><!-- row engagement-->

        </div><!-- container engagement-->

    </div>

    <!-- ========================================= -->
    <!-- ENGAGEMENT FIN -->
    <!-- ========================================= -->


    <!-- ========================================= -->
    <!-- Newsletter -->
    <!-- ========================================= -->

    <div id="newsletter" class="container text-white text-center my-150">

        <form action="Newsletter">
            <h2 class="display-s-4">S'abonner à la newsletter</h2>
            <p class="text-secondary py-1">Restons toujours en contact avec votre beauté </p>
            <div class="email-body d-flex justify-content-center mt-3">
                <i class="fas rounded-left fa-envelope"></i>
                <input type="email" name="email" value="" placeholder="Entrez votre eamil" class="input-email border-0 ">
                <button type="button" name="button" class="btn btn-outline btn-email  rounded-right text-white text-uppercase border-0 ">Envoyer</button>
            </div>
        </form><!-- from-Newsletter -->

    </div><!-- container- newsletter fin-->

    <!-- ========================================= -->
    <!-- Newsletter FIN -->
    <!-- ========================================= -->

</main>




<?php
include 'parts/footer.php';
?>