
<?php
$req = $bdh->query($sql);
$total =  $sql->rowCount();
$compteur = 0;
?>

<?php while( $sql = $bdh->fetch()){ ?>
<div class="d-flex justify-content-center m-5">
    <div class="col-md-4 ">
        <div class="box text-center py-4 px-3">
            <div class="icon">
                <?php echo $res["note"] ?>
            </div>
            <h3 class="name"><?php echo $res["name"] ?></h3>
            <p class=" mb-3 text-secondary"><?php echo $res["contenue"] ?></p>
            <?php 
            $date = $res["date_creation"];
            $timestamp = strtotime($date);
            ?>
            <p class=" mb-3 mt-2 text-secondary"><?php echo date('d-m-Y', $timestamp); ?></p>
            
        </div><!--  fin box-1 -->
    </div><!--  fin col-1 -->
</div>

<?php if($compteur && $compteur%2 && $compteur < $total -1 ) { ?>
                    </div>
                    <div class="item">
<?php } ?>
 
<?php $compteur++; ?>
 
<?php } // Fin du while ?>
                    </div>