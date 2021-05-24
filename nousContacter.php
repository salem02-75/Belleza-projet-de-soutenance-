<?php
$page = 'Belleza Contact';
include 'parts/header.php';
?>
         <!-- ========================================= -->
        <!-- Nous-Contacter-->
        <!-- ========================================= -->


        <section class="  my-5" id="nous-contacter">
        <section class="  my-5" id="Nous-contacter"  action="contacter_traitement.php" method="post">


            <div class="container  py-5">

                <h1 class="text-center titre-Contact py-4 font-weight-bold ">Contactez-nous</h1>

               
                <div class="row contact-body mt-5">
                    <div class="col-md-6 pl-3 my-5">
                        <div>
                        <h3 class="font-weight-bold pb-2">Avant de nous consulter,</h3>
                                <p>Pensez à voir notre liste de <span><a href="faq-aide.php">FAQ</a></span></p>
                                <p>Vous pouvez trouvez des avis de nos Pro et leurs fidèles</p>
                                <a class="btn btn-outline my-3" href="avis.php" role="button">les avis de nos
                                clients</a>
                        </div>
                            
                    </div> 
                    <div class="col-md-4 offset-md-2  ">
                        <div class="contact-medias   my-5 ">
                            <h3 class="font-weight-bold pb-2 ">Via nos réseaux sociaux</h3>
                            <div class="liste-medias    ">
                                <!-- <div  class=" "> -->
                                <!-- <span class=" d-flex border-right "></span> -->
                                <!-- <div class=" d-flex  "> -->
                                <a href="#">
                                    <i class="fab fa-facebook-f pl-5 "></i>
                                </a>

                                <a href="#">
                                    <i class="fab  fa-instagram px-3"></i>
                                </a>

                                <a href="#">
                                    <i class="fab fa-twitter "></i>
                                </a>
                                <!-- </div> -->
                                <!-- <span class=" border-left "></span> -->
                                <!-- </div> -->

                            </div><!-- medias-->

                        </div><!-- contact-media-->
                    </div>
                </div> <!-- row- nous-contacter fin -->

                <div class="row ">

                    <div class="col-md-6 mt-5 ">
                        <h3 class="font-weight-bold pb-2 ">Par e-mail</h3>
                        <div class="contact-text">
                            <p>Vous avez un question concernat l'inscription.</p>
                            <p>Besoin d'une précision ou d'un conseil.</p>
                            <p>vous pouvez nous écrire via le formulaire, nous vous repondons dans les plus brefs délis
                            </p>
                        </div><!-- fin col-email  -->
                    </div>
                    <div class="  col-md-6  mt-5 ">
                        <!-- Création du formulaire de contact post -->
                        <form action="" method="POST" id="contact-Form" class="bg-danger  rounded mx-auto py-3 px-4">

                            <div class="row ">
                                <div class="col-md-10 col-md-8 pb-2 pt-3 ">
                                    <div class="form-group">
                                        <input type="text" name="prenom" id="prenom" class="form-control"
                                            placeholder="Prenom" required>
                                    </div>
                                </div><!-- fin col Prenom-->

                            </div> <!-- fin row nom prénom -->

                            <div class="row ">
                                <div class="col-md-10 col-md-8 pb-4">
                                    <div class="form-group">
                                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom"
                                            required>
                                    </div>
                                </div><!-- fin col nom  -->
                            </div><!-- fin row nom  -->


                            <div class="row">
                                <div class="col-md-10 col-md-11 pb-4">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Votre adresse mail" pattern="" size="30"
                                            required>
                                    </div>
                                </div>
                            </div> <!-- fin row email -->

                            <div class="row">
                                <div class="col-md-12 pb-2">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Objet de la demande" pattern="" size="30"
                                            required>
                                    </div>
                                </div>
                            </div> <!-- fin row objet-message -->


                            <div class="row">
                                <div class="col-md-12 pb-5">

                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                            placeholder="Votre message"></textarea>
                                    </div><!-- fin col message  -->
                                    <div class="col-md-12">
                                        <input type="submit" name="envoyez" value="Envoyez"
                                            class="btn btn-md btn-success mb-4 mt-2">
                                    </div>

                                </div><!-- fin row message  -->

                            </div>
                        </form>

                    </div> <!-- fin col-2  -->

                </div> <!-- fin row-2  -->

            </div> <!-- container fin -->

        </section>
        <!-- ========================================= -->
        <!-- Nous-Contacter fin-->
        <!-- ========================================= -->


<?php
include 'parts/footer.php';
?>
