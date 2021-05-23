<?php
include '../parts/header.php';
?>

<?php
    //voir les resultats des ainput apres l'envoi des données
    // var_dump($_post);

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
    
//    ?>

         <!-- ========================================= -->
        <!-- Nous-Contacter-->
        <!-- ========================================= -->

        <section class=" text-white my-5" id="Nous-contacter">

            <div class="container  bg-gry  py-5">

                <div class="row ">

                    <div class="col-md-5 col-lg-5 col-12 my-5 mx-auto ">

                        <h2 class="text-center titre-Contact py-4 ">Contactez-nous</h2>
                        <div class="pl-4">
                            <p>Vous avez un question concernat l'inscription.</p>
                            <p>Vous recontrer des défucultés à vous inscrire dans l'éspace Pro.</p>
                            <p>vous pouvez nous écrire via le formulaire, nous vous repondons dans les plus brefs délis
                            </p>
                            <div class="pt-4">
                                <p>Consultez les conseils et avis de nous clients</p>
                                <a class="btn btn-outline-secondary " href="avis.php" role="button">les avis de nos
                                    clients</a>
                            </div>
                        </div><!-- fin col-1  -->

                        <!-- formulaire -->
                    </div>
                    <div class="col-10  col-md-7  col-lg-7 mx-auto mt-5  pt-5 bg-light">
                        <!-- Création du formulaire de contact post -->
                        <form action="" method="POST" id="contact-Form">

                            <div class="row ">
                                <div class="col-md-4 col-11 pb-2 pt-3 ">
                                    <div class="form-group">
                                        <input type="text" name="prenom" id="prenom" class="form-control"
                                            placeholder="Prenom" required>
                                    </div>
                                </div><!-- fin col Prenom-->

                            </div> <!-- fin row nom prénom -->

                            <div class="row ">
                                <div class="col-md-4 col-11 pb-4">
                                    <div class="form-group">
                                        <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom"
                                            required>
                                    </div>
                                </div><!-- fin col nom  -->
                            </div><!-- fin row nom  -->


                            <div class="row">
                                <div class="col-md-8 col-11 pb-4">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Votre adresse mail" pattern=".+@belleza.com" size="30"
                                            required>
                                    </div>
                                </div>
                            </div> <!-- fin row email -->

                            <div class="row">
                                <div class="col-md-8 pb-2">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control"
                                            placeholder="Objet de la demande" pattern=".+@belleza.com" size="30"
                                            required>
                                    </div>
                                </div>
                            </div> <!-- fin row objet-message -->


                            <div class="row">
                                <div class="col-md-8 pb-5">
                                    <div class="form-group">
                                        <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                            placeholder="Votre message"></textarea>
                                    </div><!-- fin col message  -->
                                </div><!-- fin row message  -->

                                <div class="col-md-12">
                                    <input type="submit" name="envoyez" value="Envoyez"
                                        class="btn btn-md btn-success mb-4">
                                </div>
                            </div>
                            <!-- fin row message et bouton -->
                        </form>

                    </div> <!-- fin col-2  -->

                </div> <!-- row- nous-contacter fin -->

            </div> <!-- container fin -->

        </section>
        <!-- ========================================= -->
        <!-- Nous-Contacter fin-->
        <!-- ========================================= -->


<?php
include '../parts/footer.php';
?>
