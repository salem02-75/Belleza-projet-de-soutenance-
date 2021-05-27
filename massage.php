<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Massage';
include 'parts/header.php';
?>

<main class="mb-5">
    <div class="container">
        <div class="row">
            <!-- Titre / Presentation / Buttom -->
            <div class="col-xl-6 col-md-6 col-sm-12">
                <!-- Titre -->
                <div class="mb-5 mt-5">
                    <h2>Massage</h2>
                </div>
                <!-- Image Mobile-->
                <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-mobile-responsive">
                    <div class="taille_img overflow-hidden">
                        <img src="images/massage.jpg" alt="">
                    </div>
                </div>
                <!-- Présentation -->
                <div class="mb-5">
                <p>Moment de détente ultime pour lâcher-prise et faire le plein d'énergie, le massage bénéficie de techniques ancestrales tirées de la médecine chinoise traditionnelle, de l'ayurveda -médecineindienne- ou encore du Japon, de Bali ou encore de la Thaïlande. Véritable sas de décompression, le massage nous transporte dans un autre espace temps où l'art du geste est roi.</p>
                    <hr>
                         <p>Pour que le soin soit efficace, on choisira un soin en fonction de ses problématiques ou de ses envies. Plutôt modelage du corps massage drainant amincissant? Appuyé ou délicat? Soin du visage ou soin du corps? Sans aller jusqu'à la thérapie corporelle, un massage en institut ou dans un spa permet déjà de s'échapper du tempo quotidien. </p>
                </div>
                <!-- Bouton -->
                <div class="d-flex justify-content-end">
                    <a class="button_belleza justify-content-end" href="massageoffres.php">Consulter</a>
                </div>
            </div>
            <!-- Image Desktop-->
            <div class="col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center mt-5 display-desktop-responsive">
                <div class="taille_img overflow-hidden">
                    <img src="images/massage.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include 'parts/footer.php';
?>