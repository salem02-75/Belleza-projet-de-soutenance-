<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Avis';
include 'parts/header.php';
// $tabdb est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$tabdb = "SELECT * FROM `avis` ";
include 'functions/connect.php';
?>
<main>




    <!-- boucle qui fait afficher tout les contenue de la tab --> 
    <?php for ($i = 0; $i < count($res); $i++) : ?>
        <div class="box text-center py-4 px-3 mb-5">

        <!-- affiche le contenue de  note -->
            <?php echo $res[$i]["note"] ?>
            <div class="icon">
            </div>

            <!-- affiche le contenue de name -->
            <h3 class="name"><?php echo $res[$i]["name"] ?></h3>

            <!-- affiche le contenue de  contenue -->
            <p class="mb-3 text-secondary"><?php echo $res[$i]["contenue"]; ?></p>

            <!-- affiche le contenue de date-creation -->
            <p><?php echo $res[$i]["date_creation"] ?></p>
        </div>

        
        </div>

    <?php endfor; ?>
    <!-- fin de boucle -->




</main>
<?php
include 'parts/footer.php';
?>