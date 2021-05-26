<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Deposer une annonce';
include 'parts/header.php';
include 'functions/connect.php';
?>
<!-- Titre -->
<h4 class="text-center mt-5 pt-3">Deposez une annonce</h4>
<!-- Selection de la base de donne -->
<div class="bg-white w-75 ml-auto mr-auto  pl-5 pr-5 mt-5 ">
  <label for="nom_societe" class="form-label">Le secteur d'activité</label>
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


<div class="bg-white w-75 m-auto p-4 my-5">

  <form action="./deposer_annonce.php" method="POST">

    <!-- nom de la societe -->
    <div class="p-1 m-3">
      <label for="nom_societe" class="form-label">Nom de l'entreprise</label>
      <input class="form-control" type="text" name="nom_societe" id="nom_societe" placeholder="Nom de l’entreprise" required>
    </div>


    <!-- photo-->
    <div class="p-1 m-3">
      <label for="photo" class="form-label">Photo</label>
      <input class="form-control" type="text" name="photo" id="photo" placeholder="Lien de la photo" required>
      <small class="text-muted m-3">Nécessite un hebergement de la photo au préalable</small>
    </div>


    <!-- description -->
    <div class="p-1 m-3">
      <label for="description" class="form-label">Description</label>
      <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>

    <!-- localisation -->
    <div class="p-1 m-3">
      <label for="localisation" class="form-label ">Ville</label>
      <input class="form-control " list="datalistOptions" name="localisation" id="localisation" placeholder="Ville, PAYS">
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
    </div>


    <!-- email -->
    <div class="p-1 m-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
    </div>

    <!-- validation envoie de mail -->
    <?php if (isset($_POST["nom_societe"]) && $done) : ?>
      <p class="m-3">Le post de l'entreprise <?php echo $_POST["nom_societe"]; ?> a bien été ajouter</p>
    <?php elseif (isset($_POST["nom_societe"]) && !$done) : ?>
      <p>Le post de l'entreprise <?php echo var_dump($_POST["nom_societe"]) ?> n'a pas été ajouter </p>
    <?php endif ?>

    <!-- submit -->
    <div class="p-1 m-3">
      <a href="./index.php" class="btn btn-warning  my-4">annuler</a>
      <button type="submit" class="btn btn-primary float-end my-4">envoyer</button>
    </div>



  </form>
</div>


<?php
include 'parts/footer.php';
?>