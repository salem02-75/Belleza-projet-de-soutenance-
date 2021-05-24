<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Offres Massages';
include 'parts/header.php';
include 'functions/connect.php';
// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM `massages` ";
$res = request_sql($dbh, $sql);
include 'functions/tronque.php';
?>
<div class="container">
  <div class="row d-flex justify-content-center mt-5">

    <!-- filtre/recherche -->
    <form>
      <div class="form-row align-items-center d-sm-felx justify-content-end mr-2">
        <div class="col-auto my-3">
          <label class="ml-sm-auto sr-only" for="inlineFormCustomSelect">Preference</label>
          <!-- choix de la ville -->
          <label for="validationServer04">ville</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <!-- <option selected>Ville</option> -->
            <option value="1">Paris</option>
            <option value="2">Lyon</option>
            <option value="3">Lile</option>
            <option value="4">Marseille</option>
          </select>
        </div>

        <!-- choix du sex du pro -->
        <div class="col-auto my-3">
          <label for="validationServer04">Genre</label>
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option value="1">Homme</option>
            <option value="2">Femme</option>
            <option value="3">Pas de préférence</option>
          </select>
        </div>

        <!-- disponibilité  -->
        <div class="col-auto my-3">
          <label for="validationServer04">Disponibilité</label>
          <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
          <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
            <option value="1">Semaine</option>
            <option value="2">Week-end</option>
            <option value="3">Tout</option>
          </select>
        </div>

        <div class="col-auto mt-4">
          <button type="" class="btn btn-primary ">Filtrer</button>
        </div>
      </div>
    </form>
    <!-- fin de filtre -->

    <?php for ($i = 0; $i < count($res); $i++) : ?>
      <!--template pour une future boucle php -->


      <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- Carte Offre Desktop-->
        <div class="card card_desktop_service mb-3" style="max-width: 125vh;">
          <div class="row g-0">
            <div class="col-4 overflow-hidden taille_img_service_offres">

              <!-- IMG -->
              <img src="<?php echo $res[$i]["photo"] ?>" alt="ALEATOIR">
            </div>
            <div class="col-6 gestion_mobile_service">
              <div class="card-body">

                <!-- NOM -->
                <h5 class="card-title">
                  <?php echo $res[$i]["nom_societe"] ?>
                </h5>

                <!-- DESCRIPTION -->
                <p class="card-text description_responsive_mobile" maxlength="10">
                  <?php
                  echo tronque(utf8_encode($res[$i]["description"]), 100); ?>
                </p>

                <!-- LOCALISATION -->
                <p class="card-text">
                  <small class="text-muted">
                    <?php echo $res[$i]["localisation"] ?>
                  </small>
                </p>
              </div>
            </div>

            <!-- Ici besoin d'un margin right -->
            <div class="col-2 d-flex align-items-center ">
              <div>
                <a class="button_belleza button_service" href="offremassage.php?id=<?php echo $res[$i]["id"] ?>">Consulter</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card mobile -->
        <div class="card_mobile_service">
          <div class="d-flex justify-content-center mb-5">
            <div class="card" style="width: 18rem;">
              <img src="<?php echo $res[$i]["photo"] ?>" alt="ALEATOIR">
              <small class="text-muted">
                <?php echo $res[$i]["localisation"] ?>
              </small>
              <div class="card-body mobileDesignText">
                <h5 class="card-title">
                  <?php echo $res[$i]["nom_societe"] ?>
                </h5>
                <p class="card-text">
                  <?php echo tronque(utf8_encode($res[$i]["description"]), 100); ?>
                </p>
              </div>

              <div class="d-flex justify-content-center">
                <a class="button_belleza" href="offrecoiffure.php?id=<?php echo $res[$i]["id"] ?>">Consulter</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    <?php endfor; ?>
  </div>
</div>
<?php
include 'parts/footer.php';
?>