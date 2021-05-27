<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Coiffure';
include 'parts/header.php'
?>

<main class="mb-5">
    <div class="container">
        <div class="row">

            <!-- Titre / Presentation / Buttom -->
            <div class="col-xl-6 col-md-6 col-sm-12">

                <!-- Titre -->
                <div class="mb-5 mt-5">
                    <h2>Coiffure</h2>
                </div>
                <!-- Image Mobile-->
                <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-mobile-responsive">
                    <div class="overflow-hidden mb-5">
                        <img src="images/coiffure.jpg" alt="">
                    </div>
                </div>
                <!-- Présentation -->
                <div class="mb-5">
                    <p>Vous avez envie de changer de coiffure et vous ne savez pas quelle coupe de cheveux choisir ? Quelle longueur adopter ? Quelle mode suivre ?</p>
                    <hr>
                    <p>Découvrez ici des coiffures pour vous inspirer et varier les looks au gré de vos envies. Apprenez à réaliser des chignons, des queues-de-cheval ou des tresses en tous genres. Vous trouverez votre bonheur quel que soit votre style : rock, vintage, bohème, urbain-chic ou sophistiqué. Choisissez la frange et la raie qui boosteront votre chevelure wavy, lisse, bouclée ou frisée. Enfin, dégotez LA coupe tendance qui sublimera votre carré, vos cheveux courts, ainsi que vos longueurs XXL.</p>
                    <hr>
                    <p>Vous trouverez donc dans cette rubrique des idées de coiffure en images</p>
                </div>

                <!-- Bouton -->
                <div class="d-flex justify-content-end">
                    <a class="button_belleza justify-content-end" href="coiffureoffres.php">Consulter</a>
                </div>
            </div>

            <!-- Image Desktop-->
            <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-desktop-responsive">
                <div class="overflow-hidden taille_img">
                    <img src="images/coiffure.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'parts/footer.php';
?>