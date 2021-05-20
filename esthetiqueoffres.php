<?php
$page = 'Belleza Esthétique Offres';
include 'parts/header.php';
include 'fonctions/connectesthetiques.php';
include 'fonctions/tronque.php';
?>
<div class="container">
  <div class="row d-flex justify-content-center mt-5">


    <?php for ($i = 0; $i < count($res); $i++) : ?>
      <!--template pour une future boucle php -->

      <!-- Carte Offre -->
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card mb-3 mb-5" style="max-width: 125vh;">
          <div class="row g-0">

            <!-- IMG -->
            <div class="col-4 overflow-hidden taille_img_service_offres">
              <img src="<?php echo $res[$i]["photo"] ?>" alt="ALEATOIR">
            </div>

            <div class="col-6">
              <div class="card-body">
                <!-- NOM -->
                <h5 class="card-title">
                  <?php echo $res[$i]["nom_societe"] ?>
                </h5>
                <!-- DESCRIPTION -->
                <p class="card-text" maxlength="10">
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
                <a class="button_belleza" href="offreesthetique.php?id=<?php echo $res[$i]["id"] ?>">Consulter</a>
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