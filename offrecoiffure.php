<?php

include 'functions/connect.php';

// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM coiffures WHERE `id`=" . $_GET["id"];
$res = request_sql($dbh, $sql);
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza coiffure' . ' ' . $res[0]["nom_societe"];
include 'parts/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card-body">
                <h2 class="card-title"><?php echo $res[0]["nom_societe"] ?></h2>
                <p class="card-text">
                    <small class="text-muted">
                        <?php echo $res[0]["localisation"] ?>
                    </small>
                </p>
                <p class="card-text"><?php echo $res[0]["description"] ?></p>
            </div>
        </div>
        <div class="col overflow-hidden">
            <img src="<?php echo $res[0]["photo"] ?>" class="card-img-top" alt="...">
        </div>
    </div>
</div>

<?php
include 'parts/footer.php';
?>