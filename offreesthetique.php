<?php

include 'functions/connect.php';

// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM esthetiques WHERE `id`=" . $_GET["id"];
$res = request_sql($dbh, $sql);
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Esthétique' . ' ' . $res[0]["nom_societe"];
include 'parts/header.php';
include 'functions/mail_offres.php';
?>

<div class="container">
    <div class="row mt-5">
        <div class="col-lg-6 col-md-6 col-sm-12">
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
        <div class="col-lg-6 col-md-6 col-sm-12 overflow-hidden align-middle d-flex">
            <img src="<?php echo $res[0]["photo"] ?>" class="card-img-top" alt="Image representant le professionelle">
        </div>
    </div>
</div>


<h4 class="text-center mt-5 mb-5">Contact</h4>


<!-- Email -->
<?php if (!$_mail_state) : ?>
    <form class="container" action="offrecoiffure.php?id=<?php echo $res[0]["id"] ?>" method="post">

        <!-- Email -->
        <div class="row">
            <div class="col email">
                <label for="email" class="form-label">Mon adresse mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            </div>
            <!-- Name -->
            <div class="col name">
                <label for="name" class="form-label">Prenom</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
        </div>

        <!-- Content -->
        <div class="mb-3 mt-3 content">
            <label for="exampleFormControlTextarea1" class="form-label">Contenu du message</label>
            <textarea name="content" class="form-control" id="content" rows="3">Bonjour, je prend contact avec vous pour connaître vos disponibilité...</textarea>
        </div>

        <!-- Boutton submit -->

        <div class="d-flex justify-content-end">
            <input type="submit" class="button_belleza justify-content-centre" valeur="envoyer">
        </div>
    </form>
<?php else : ?>
    <h3 class="d-flex justify-content-center mt-5 text-info">mail envoyer</h3>
<?php endif; ?>
<!-- Fin Email -->

<?php
include 'parts/footer.php';
?>