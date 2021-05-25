<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Avis';
include 'parts/header.php';
include 'functions/connect.php';
include 'functions/add_avis.php';
$sql = "SELECT * FROM `avis` ";
// lance la fonction de connection a la db
$dbh = db_connect();
// $tabdb est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$res = request_sql($dbh, $sql);
?>

<main>

<div class="bg-white w-75 m-auto p-4 my-5">

    <?php if (isset($_POST["name"]) && $done) : ?>
        <p>votre commentaire <?php echo $_POST["name"] ; ?> a bien été ajouter</p>
    <?php elseif (isset($_POST["name"]) && !$done) : ?>
        <p>votre commentaire <?php echo var_dump($_POST["name"]) ?> n'a pas été ajouter </p>
    <?php endif ?>

    <form action="./avis.php" method="POST">

        <input class="form-control p-1 m-3" type="text" name="name" id="name" placeholder="Nom" required>

        <input class="form-control p-1 m-3" type="text" name="contenue" id="contenue" placeholder="Avis" required>

        <input class="form-control p-1 m-3" type="text" name="note" id="note" placeholder="note" required>

        <a href="./index.php" class="btn btn-warning  my-4">annuler</a>
        <button type="submit"  class="btn btn-primary float-end my-4">envoyer</button>
    </form>
    </div>
</main>

<?php
include 'parts/footer.php';
?>