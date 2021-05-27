<?php
$ma_tab = "coiffures";
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Offres coiffures';
include 'parts/header.php';
include 'functions/connect.php';
// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM $ma_tab ";
$res = request_sql($dbh, $sql);
include 'functions/pagination.php';
include 'functions/tronque.php';
?>

<div class="container">
  <div class="row d-flex justify-content-center mt-5">
    </form>
    <!-- fin de filtre -->

    <?php
    for ($i = 0; $i < count($res); $i++) :
    ?>

      <div class="col-lg-12 col-md-12 col-sm-12">
        <!-- Carte Offre Desktop-->
        <div class="card card_desktop_service mb-3">
          <div class="row g-0">
            <div class="col-4 overflow-hidden taille_img_service_offres">

              <!-- IMG -->
              <img src="<?php echo $res[$i]["photo"] ?>" alt="ALEATOIR">
            </div>
            <div class="col-6 gestion_mobile_service">
              <div class="card-body">

                <!-- NOM -->
                <h5 class="card-title">
                  <?php
                  echo $res[$i]["nom_societe"]
                  ?>
                </h5>

                <!-- DESCRIPTION -->
                <p class="card-text description_responsive_mobile" maxlength="10">
                  <?php
                  echo tronque($res[$i]["description"], 100); ?>
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
                <a class="button_belleza button_service" href="offrecoiffure.php?id=<?php echo $res[$i]["id"] ?>">Consulter</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Card mobile -->
        <div class="card_mobile_service">
          <div class="d-flex justify-content-center mb-5">
            <div class="card" style="width: 18rem;">
              <img src="<?php
                        echo $res[$i]["photo"]
                        ?>" alt="ALEATOIR">
              <small class="text-muted">
                <?php
                echo $res[$i]["localisation"]
                ?>
              </small>
              <div class="card-body mobileDesignText">
                <h5 class="card-title">
                  <?php
                  echo $res[$i]["nom_societe"]
                  ?>
                </h5>
                <p class="card-text">
                  <?php
                  echo tronque($res[$i]["description"], 100);
                  ?>
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





    <!-- Pagination -->
    <nav aria-label="Page navigation example mt-5">
      <ul class="pagination justify-content-center">
        <li class="page-item 
         <?php if ($page <= 1) {
            echo 'disabled';
          } ?>
        ">
          <a class="page-link" href="<?php if ($page <= 1) {
                                        echo '#';
                                      } else {
                                        echo "?page=" . $prev;
                                      } ?>">Previous</a>
        </li>

        <?php for ($i = 1; $i <= $totoalPages; $i++) : ?>
          <li class="page-item <?php if ($page == $i) {
                                  echo 'active';
                                } ?>">
            <a class="page-link" href="CoiffureOffres.php?page=<?= $i; ?>"> <?= $i; ?> </a>
          </li>
        <?php endfor; ?>

        <li class="page-item <?php if ($page >= $totoalPages) {
                                echo 'disabled';
                              } ?>">
          <a class="page-link" href="<?php if ($page >= $totoalPages) {
                                        echo '#';
                                      } else {
                                        echo "?page=" . $next;
                                      } ?>">Next</a>
        </li>
      </ul>
    </nav>
  </div>
  <!-- fin pagination -->


</div>


<?php
include 'parts/footer.php';
?>