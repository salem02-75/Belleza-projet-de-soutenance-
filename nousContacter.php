<?php
$page = 'Belleza Contact';
include 'parts/header.php';
?>







    <!-- ========================================= -->
    <!-- Nous-Contacter-->
    <!-- ========================================= -->


    <section class="container  my-5" id="nous-contacter">
        <section class="  mx-2 my-5" id="Nous-contacter" action="contacter_traitement.php" method="post">


            <div class="container  py-5">

                <h1 class="titre-Contact text-center py-4 font-weight-bold ">Contactez-nous</h1>
                <div class="row contact-body mt-5">
                    <div class="col-md-6 pl-3 my-5 ">
                            <h3 class="font-weight-bold pb-2 ">Avant de nous consulter,</h3>
                            <p>Pensez à voir notre liste de <span><a href="faq-aide.php" class="text-decoration-none">FAQ</a></span></p>
                            <p>Vous pouvez trouvez des avis de nos Pro et leurs fidèles</p>
                            <a class="btn btn-outline my-3" href="avis.php" role="button">les avis de nos
                                clients</a>
                    </div>
                    
                    <div class="col-md-6  my-5 ">
                            <h3 class="font-weight-bold pb-2 ">Via nos réseaux sociaux</h3>
                            <div class="liste-medias ">
                             
                                <a href="https://www.facebook.com/belleza.france" class="text-decoration-none">
                                    <i class="fab fa-facebook-f pl-5 "></i>
                                </a>

                                <a href="https://www.instagram.com/belleza_france/" class="text-decoration-none">
                                    <i class="fab  fa-instagram px-3 "></i>
                                </a>

                                <a href="https://twitter.com/belleza42020217" class="text-decoration-none">
                                    <i class="fab fa-twitter "></i>
                                </a>

                            </div><!-- medias-->

                    </div><!-- contact-media-->
                    <!-- </div> -->
                </div> <!-- row- nous-contacter fin -->

                <div class="row ">
                    <div class="col-md-6 mt-5 pl-4 ">
                        <h3 class="font-weight-bold pb-2 ">Par e-mail</h3>
                        <div class="contact-text">
                            <p>Vous avez un question concernat l'inscription.</p>
                            <p>Besoin d'une précision ou d'un conseil.</p>
                            <p>vous pouvez nous écrire via le formulaire, nous vous repondons dans les plus brefs délis
                            </p>
                        </div><!-- fin col-email  -->
                    </div>
                    <div class="col-md-6  mt-5 ">
                        <!-- Création du formulaire de contact post -->
                        <div class="container bg-danger">
                            <div class="">
                                <h1 class="d-flex justify-content-center pt-3">Contactez-nous ! </h1>
                            </div>
                                <form action="contacter_traitement.php" method="POST">
                                    <div class="form-group">
                                        <div class="py-3 ">
                                            <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control " />
                                        </div>
                                        <div class="py-3">
                                            <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control " />
                                        </div>
                                         <div class="py-3">
                                             <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control " />
                                        </div>
                                        <div class="py-3">
                                            <textarea rows="10" name="message" placeholder="Envoyez votre message à bellezafrance.contact@gmail.com" class="form-control "></textarea>
                                        </div>
                                           
                                        <button type="submit" class="btn btn-lg btn-primary my-3 ">Envoyer</button>
                                    </div>
                                </form>
                        </div>

                    </div> <!-- fin col-2  -->

                </div> <!-- fin row-2  -->

            </div> <!-- container fin -->

        </section>
        <!-- ========================================= -->
        <!-- Nous-Contacter fin-->
        <!-- ========================================= -->




    </section>

<?php
include 'parts/footer.php';
?>
