<?php
$title_belleza = 'Belleza';
?>
<?php
include 'parts/header.php';
?>



<main>
    <section class="banniere">
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-7">
                    <div class="card-body">
                        <h2 class="card-title">Ne <span>B</span>ougez pas, on vient à <span>Vous</span></h2>
                        <p class="card-text">Nos professionnelles viennent chez vous vous pouponer seule, en couple ou
                            en famille pour voud rendre <span>BELLEZA</span></p>
                    </div>
                </div>
                <div class="col-md-5">
                    <img src="images/img-header.png" alt="silhouette à coiffer ">
                </div>
            </div>
        </div>
    </section>

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
    <div id="avis" class="pb-5">
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
    <div id="engagement">
        <h3 class="text-center my-5">Nos Engagements</h3>
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-md-4 col-4  border border-danger rounded mr-5 my-4">
                    <img class="img-icon text-center py-3  " src="images/couplee.png" alt="image de couple">
                    <div>
                        <h3 class="py-2 text-center text-uppercase">Satisfaction</h3>
                        <p class="py-3 text-center font-weight-bold">Nos experts seront à la hauteur de vos exigances </p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="col-lg-2 col-md-4 col-4  border border-danger rounded mr-5 my-4">
                    <img class="img-icon text-center py-3 " src="images/love.png" alt="love">
                    <div>
                        <h3 class="py-2 text-center text-uppercase">écoute</h3>
                        <p class="py-3  text-center font-weight-bold">Nos professionnels seront vos amis </p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="col-lg-2 col-md-4 col-4  border border-danger rounded mr-5 my-4">
                    <img class="img-icon text-center py-3 " class="text-center" src="images/key.png" alt="cles">
                    <div>
                        <h3 class="py-2 text-center text-uppercase">Discrétion</h3>
                        <p class="py-3  text-center font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisic.corrupti!</p>
                    </div><!-- col-->
                </div><!-- col-->

                <div class="col-lg-2 col-md-4 col-4  border border-danger rounded mr-5 my-4">
                    <img class="img-icon text-center py-3 " src="images/love-2.png" alt="groupe de coeurs">
                    <div>
                        <h3 class="py-2 text-center text-uppercase">Fidélité</h3>
                        <p class="py-3  text-center font-weight-bold">nous réalisons fréquemment des enquètes client</p>
                    </div><!-- col-->
                </div><!-- col-->

            </div><!-- row-->
        </div><!-- container-->
    </div>
    <!-- ========================================= -->
    <!-- ENGAGEMENT FIN -->
    <!-- ========================================= -->

</main>




<?php
include 'parts/footer.php';
?>