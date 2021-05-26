<?php
$page = 'Belleza Contact';
include 'parts/header.php';
?>







    <!-- ========================================= -->
    <!-- Nous-Contacter-->
    <!-- ========================================= -->


    <?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars($_GET['reg_err']);
        // switch equivalent de if, si la valeur contenu dans la case est bonne alors elle s'execute, break permet de dire qu'on dois sortire du switch 
        // c'est d'un point de vue visuel plus simple que if else if 

        switch ($err) {
            case 'success':
         ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> envoie réussie !
                </div>
            <?php
                break;

            case 'password':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
                </div>
            <?php
                break;

            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
            <?php
                break;

        
        }
    }

    ?>


    <section class="  my-5" id="nous-contacter">
        <section class="  my-5" id="Nous-contacter" action="contacter_traitement.php" method="post">


            <div class="container  py-5">

                <h1 class="text-center titre-Contact py-4 font-weight-bold ">Contactez-nous</h1>


                <div class="row contact-body mt-5">
                    <div class="col-md-6 pl-3 my-5 ">
                        <div>
                            <h3 class="font-weight-bold pb-2 ">Avant de nous consulter,</h3>
                            <p>Pensez à voir notre liste de <span><a href="faq-aide.php" class="text-decoration-none">FAQ</a></span></p>
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
                                <a href="https://www.facebook.com/belleza.france" class="text-decoration-none">
                                    <i class="fab fa-facebook-f pl-5 "></i>
                                </a>

                                <a href="https://www.instagram.com/belleza_france/" class="text-decoration-none">
                                    <i class="fab  fa-instagram px-3 "></i>
                                </a>

                                <a href="https://twitter.com/belleza42020217" class="text-decoration-none">
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
                        <div class="container">
                            <div class="d-flex justify-content-center">
                                <div class="col-8 m-4">
                                    <form action="contacter_traitement.php" method="POST">
                                        <div class="form-group">
                                            <div class="text-center">
                                                <h1>Contactez-nous ! </h1>
                                            </div>
                                            <div class="d-flex">
                                                <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control" />
                                                <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control" />
                                            </div>
                                            <br />
                                            <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control" />
                                            <br />
                                            <textarea rows="10" name="message" placeholder="Envoyez votre message à bellezafrance.contact@gmail.com" class="form-control"></textarea>
                                            <br />
                                            <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div> <!-- fin col-2  -->

                </div> <!-- fin row-2  -->

            </div> <!-- container fin -->

        </section>
        <!-- ========================================= -->
        <!-- Nous-Contacter fin-->
        <!-- ========================================= -->




        </div>

<?php
include 'parts/footer.php';
?>
