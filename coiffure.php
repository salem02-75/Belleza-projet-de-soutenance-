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
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fuga aperiam hic maxime error non accusantium, quas, ut maiores deserunt incidunt quod voluptates ipsum nisi corporis repellendus ipsam dicta praesentium quo eveniet ducimus commodi libero, itaque provident fugit? Dignissimos dicta facilis nemo ipsam, totam iusto labore perferendis quae, minima corporis rerum.</p>
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