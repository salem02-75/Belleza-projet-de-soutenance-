<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Esthétique';
include 'parts/header.php';
?>

<main class="mb-5">
    <div class="container">
        <div class="row">

            <!-- Titre / Presentation / Buttom -->
            <div class="col-xl-6 col-md-6 col-sm-12">

                <!-- Titre -->
                <div class="mb-5 mt-5">
                    <h2>Esthétique</h2>
                </div>

                <!-- Image Mobile -->
                <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-mobile-responsive">
                    <div class="mb-5 overflow-hidden">
                        <img src="images/esthétique.jpg" alt="">
                    </div>
                </div>

                <!-- Présentation -->
                <div class="mb-5">
                <p>Dans notre société de l’apparence, soigner son look est aujourd’hui essentiel ! L’esthéticienne y joue un rôle important : gommer les imperfections, embellir la peau, retarder les effets du vieillissement… Ses services sont recherchés, non seulement par la gent féminine mais aussi de plus en plus par la clientèle masculine.</p>
                    <hr>
                     <p>L’esthéticienne est la spécialiste des soins de beauté, et en tout premier lieu ceux du visage. Elle entretient et traite l’épiderme de ses clients pour retarder l’apparition des rides, effacer les effets du stress, ou traiter des problèmes particuliers (rougeurs, acné, cicatrices…). Elle identifie d’abord le type de peau de sa cliente (normale, grasse, déshydratée…) et choisit les soins les plus adaptés : nettoyage de peau, modelage, masque, peeling…Il lui arrive régulièrement de donner des conseils de maquillage.</p>
                </div>

                <!-- Bouton -->
                <div class="d-flex justify-content-end">
                    <a class="button_belleza justify-content-end" href="esthetiqueoffres.php">Consulter</a>
                </div>
            </div>

            <!-- Image Desktop -->
            <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-desktop-responsive">
                <div class="taille_img overflow-hidden">
                    <img src="images/esthétique.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'parts/footer.php';
?>