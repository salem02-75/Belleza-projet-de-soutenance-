<?php
include 'parts/header.php';
include 'fonctions/connectoffreesthetique.php';
include 'fonctions/tronque.php';
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
        <div class="col">
            <img src="<?php echo $res[0]["photo"] ?>" class="card-img-top" alt="...">
        </div>

    </div>
</div>







<?php
include 'parts/footer.php';
?>