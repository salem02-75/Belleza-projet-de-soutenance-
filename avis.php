<?php
$ma_tab = "avis";
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'Belleza Avis';
include 'parts/header.php';
include 'functions/connect.php';
include 'functions/add_avis.php';
$sql = "SELECT * FROM  $ma_tab ";
// lance la fonction de connection a la db
$dbh = db_connect();
// $tabdb est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$res = request_sql($dbh, $sql);
include 'functions/pagination.php';
?>

<main>

    <?php for ($i = 0; $i < count($res); $i++) : ?>

        <div class="d-flex justify-content-center m-5">
            <div class="col-md-4 ">
                <div class="box text-center py-4 px-3">
                    <div class="icon">
                        <?php echo $res[$i]["note"] ?>
                    </div>
                    <h3 class="name"><?php echo $res[$i]["name"] ?></h3>
                    <p class=" mb-3 text-secondary"><?php echo $res[$i]["contenue"] ?></p>
                    <?php 
                    $date = $res[$i]["date_creation"];
                    $timestamp = strtotime($date);
                    ?>
                    <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
                    
                </div><!--  fin box-1 -->
            </div><!--  fin col-1 -->
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
                    <a class="page-link" href="avis.php?page=<?= $i; ?>"> <?= $i; ?> </a>
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

    <!-- fin pagination -->



    <div class="bg-white w-75 m-auto p-4 my-5">

        <?php if (isset($_POST["name"]) && $done) : ?>
            <p>Le commentaire de <?php echo $_POST["name"]; ?> a bien été ajouter</p>
        <?php elseif (isset($_POST["name"]) && !$done) : ?>
            <p>Le commentaire de <?php echo var_dump($_POST["name"]) ?> n'a pas été ajouter </p>
        <?php endif ?>

        <!-- Laisser un avis -->
        <form action="./avis.php" method="POST">

            <!-- Name -->
            <input class="form-control p-1 m-3" type="text" name="name" id="name" placeholder="Nom" required>

            <!-- Contenue -->
            <input class="form-control p-1 m-3" type="text" name="contenue" id="contenue" placeholder="Avis" required>


            <!-- <i class="fas fa-star text-danger"></i> -->
            <!-- Note -->
            <div class="input-group  m-3">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="note">Note</label>
                </div>
                <select type="text" class="custom-select" name="note" id="note" required>
                    <option selected>Choose...</option>
                    <option value='<i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i>'>5</option>
                    <option value='<i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i>'>4</option>
                    <option value='<i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i>'>3</option>
                    <option value='<i class="fas fa-star text-danger"></i><i class="fas fa-star text-danger"></i>'>2</option>
                    <option value='<i class="fas fa-star text-danger"></i>'>1</option>
                </select>
            </div>

            <div class="ml-3">
                <a href="./index.php" class="btn btn-warning  my-4">annuler</a>
                <button type="submit" class="btn btn-primary float-end ml-3 my-4">envoyer</button>
            </div>

        </form>
    </div>

</main>

<?php
include 'parts/footer.php';
?>