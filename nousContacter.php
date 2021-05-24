<?php
$page = 'Belleza Contact';
include 'parts/header.php';
?>


    <!-- voir les resultats des ainput apres l'envoi des données
     var_dump($_post);

    //on vérifie si il y l'enoi de données.
    // if($_post){
        //si il y a un clique on vérifie l'envoi
        // if(isset($_poste['envoyer'])){

            // traitement des données
            // si l'input Nom exiiste , on prend sa value, sinon $nom = à rien (valable en PHP)
            // htmlentities = protection => pour eviter d'ecrire un scripte dans le chemin
            
            // $nom = isset($_post ['nom']) ? htmlentities($post['nom']): '';
            // $prenom = isset($_post ['prenom']) ? htmlentities($post['prenom']): '';
            // $mail = isset($_post ['mail']) ? htmlentities($post['mail']): '';
            // $objet = isset($_post ['objet']) ? htmlentities($post['objet']): '';
            // $message = isset($_post ['message']) ? htmlentities($post['message']): '';
        
            // }
        // }
     -->
   

         <!-- ========================================= -->
        <!-- Nous-Contacter-->
        <!-- ========================================= -->

        <section class="  my-5" id="Nous-contacter"  action="contacter_traitement.php" method="post">

            <div class="container  py-5">

                <h1 class="text-center titre-Contact py-4 ">Contactez-nous</h1>
                <div class="row ">
                    <div class="col-2 ">

                        <div class="contact-medias d-none ">
                            <div class="liste-medias d-flex flex-column text-right pt-5 mr-3">
                                <!-- <div  class=" "> -->
                                <!-- <span class=" d-flex border-right "></span> -->
                                <!-- <div class=" d-flex  "> -->
                                <a href="#">
                                    <i class="fab fa-facebook-f pb-4"></i>
                                </a>

                                <a href="#">
                                    <i class="fab  fa-instagram pb-4 "></i>
                                </a>

                                <a href="#">
                                    <i class="fab fa-twitter  "></i>
                                </a>
                                <!-- </div> -->
                                <!-- <span class=" border-left "></span> -->
                                <!-- </div> -->

                            </div><!-- medias-->

                        </div><!-- contact-media-->
                    </div>

                    <div class="col-md-7 mt-5 ">

                        <div class="contact-text">
                            <p>Vous avez un question concernat l'inscription.</p>
                            <p>Vous recontrer des défucultés à vous inscrire dans l'éspace Pro.</p>
                            <p>vous pouvez nous écrire via le formulaire, nous vous repondons dans les plus brefs délis
                            </p>
                        </div><!-- fin col-1  -->

                        <div class=" pt-5">
                        <p>Consultez les conseils et avis de nous clients</p>
                        <a class="btn btn-outline-secondary " href="avis_guillaume.php" role="button">les avis de nos
                        clients</a>
                    </div> 

                        <!-- formulaire -->
                    </div>
                   
                   
                </div> <!-- row- nous-contacter fin -->
               

                <div class="row ">
                    <div class="col-12  col-md-5  mt-5 ">
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
                                            class="btn btn-md btn-success mb-4">
                                    </div>
                                </div><!-- fin row message  -->

                            </div>
                        
                            <!-- fin row message et bouton -->
                        </form>

                    </div> <!-- fin col-2  -->
                </div>

                


            </div> <!-- container fin -->

        </section>
        <!-- ========================================= -->
        <!-- Nous-Contacter fin-->
        <!-- ========================================= -->


<?php
include 'parts/footer.php';
?>
