<?php
$title_belleza = 'Belleza';
?>
<?php
include 'parts/header.php';
?>



<main>
    <!-- la banniere  a changer en image -->
    <section class="banniere">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Lorem ipsum dolor sit amet consectetur, adipis</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet vel quod, magnam tenetur
                        neque
                        necessitatibus itaque laboriosam harum facilis officiis sunt recusandae incidunt omnis
                        facere soluta aspernatur quia ut ipsam.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- service et avis -->
    
        <!-- ========================================= -->
        <!-- Services -->
        <!-- ========================================= -->
        <h2 class="text-center  my-5">Nos services</h2>
        <div id="service" class="container">
            <div class="row ">
                <!-- col-1 -->
                <div class="col col-12 col-md-6 col-lg-4 ">
                    <div class="card mb-4">
                        <a href="#coiffure.php">
                            <img src="images/coiffure.jpg" alt="image de coiffure, coupe de cheveux"
                                class="card-img-top imgService">
                        </a>

                        <div class="card-body ">
                            <h3 class="card-title text-center">Coiffure</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quam?
                            </p>
                        </div><!-- fin de card-body -->

                    </div><!-- fin de card-->

                </div><!-- fin de col-1 card -->

                <!-- col-12 -->
                <div class="col col-12 col-md-6 col-lg-4 ">
                    <div class="card mb-4">
                        <a href="#coiffure.php">
                            <img src="images/esthétique.jpg" alt="image de Esthétique, Maquillage,soin"
                                class="card-img-top imgService">
                        </a>

                        <div class="card-body">
                            <h3 class="card-title text-center">Esthétique</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quam?
                            </p>
                        </div><!-- fin de card-body -->

                    </div><!-- fin de col-2 card -->

                </div><!-- fin de card-->

                <!-- col-3 -->
                <div class="col col-12 col-md-6 col-lg-4 ">
                    <div class="card mb-4">
                        <a href="#coiffure.php">
                            <img src="images/massage.jpg" alt="image de massage" class="card-img-top imgService">
                        </a>

                        <div class="card-body">
                            <h3 class="card-title text-center">Massage</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, quam?
                            </p>
                        </div><!-- fin de card-body -->

                    </div><!-- fin de col-3 card -->

                </div><!-- fin de card-->

            </div><!-- fin de row -->

        </div><!-- fin de container service-->

        <!-- ========================================= -->
        <!-- avis -->
        <!-- ========================================= -->
        <div class="pb-5">

            <h3 class="d-flex justify-content-center mt-5">Les avis de nos  <span class="text-danger ml-2"> fièles</span></h3>
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
                                                <p class=" mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis
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
                                                <p class="mb-3 ">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis
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
    <!-- Footer start -->
    <!-- ========================================= -->

</main>




<?php
include 'parts/footer.php';
?>

