<head>
        <meta charset="UTF-8">
        <title>Avis</title>

    </head>

    <body>
        <h1>Hello</h1>

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Prenom Nom</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
        </div>

        <div class="input-group">
            <span class="input-group-text">Ecrivez ici</span>
            <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>

        <?php
        //on affiche le formulaire pour poster un commentaire
        echo ("avis.php"); // indiquer la page actuelle avec ou sans query du type ?id=123&... et l'id de l'article pour affiche les commentaires de cette article seulement, si vous utilisez ce système de commentaire pour un livre d'or par exemple, vous pouvez l'enlever et mettre seulement la page actuelle: afficherFormulaireCommentaire("page.php");


        ?>




    </body>

    </html>

    <?php
    include 'parts/footer.php';
    ?>
=======
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
>>>>>>> e30164eba2923a095f0ec39fd9e429a8852360c9
