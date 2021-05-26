<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Deposer une annonce';
include 'parts/header.php';
include 'functions/connect.php';
?>


<!-- Selection de la base de donne -->
<div class="bg-white w-75 m-auto p-4 my-5">
  <form class="input-group mb-3" method="post" action="traitement.php">
    <select class="custom-select" id="inputGroupSelect02">
      <option selected>Selectionner le service proposer</option>
      <option value="<?php echo $services = "coiffures" ?>">Coiffures</option>
      <option value="<?php echo $services = "esthetiques" ?>">Esthetiques</option>
      <option value="<?php echo $services = "massages" ?>">Massages</option>
    </select>
    <div class="input-group-append">
      <label class="input-group-text" for="inputGroupSelect02">Options</label>
    </div>
  </form>
</div>


<?php
include 'functions/add_services.php';
$sql = "SELECT * FROM $services ";
// lance la fonction de connection a la db
$dbh = db_connect();
$res = request_sql($dbh, $sql);
?>


<main>
  <div class="bg-white w-75 m-auto p-4 my-5">
    <?php if (isset($_POST["nom_societe"]) && $done) : ?>
      <p class="m-3">Le post de l'entreprise <?php echo $_POST["nom_societe"]; ?> a bien été ajouter</p>
    <?php elseif (isset($_POST["nom_societe"]) && !$done) : ?>
      <p>Le post de l'entreprise <?php echo var_dump($_POST["nom_societe"]) ?> n'a pas été ajouter </p>
    <?php endif ?>

    <form action="./deposer_annonce.php" method="POST">

      <!-- nom de la societe -->
      <input class="form-control p-1 m-3" type="text" name="nom_societe" id="nom_societe" placeholder="Nom de l’entreprise" required>

      <!-- photo-->
      <input class="form-control p-1 m-3" type="text" name="photo" id="photo" placeholder="Lien de la photo" required>
      <small class="text-muted m-3">Nécessite un hebergement de la photo au préalable</small>

      <!-- description -->
      <div class="p-1 m-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>

      <!-- localisation -->
      <label for="localisation" class="form-label p-1 m-3">Ville</label>
      <input class="form-control m-3" list="datalistOptions" name="localisation" id="localisation" placeholder="Ville, PAYS">
      <datalist id="datalistOptions">
        <option value="Paris, France">
        <option value="Marseille, France">
        <option value="Lyon, France">
        <option value="Toulouse, France">
        <option value="Bordeaux, France">
        <option value="Nantes, France">
        <option value="Nice, France">
        <option value="Montpellier, France">
      </datalist>

      <!-- email -->
      <div class="p-1 m-3">
        <label for="email" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" id="email">
      </div>

      <!-- submit -->
      <a href="./index.php" class="btn btn-warning  my-4">annuler</a>
      <button type="submit" class="btn btn-primary float-end my-4">envoyer</button>
    </form>
  </div>
</main>

<?php
include 'parts/footer.php';
?>