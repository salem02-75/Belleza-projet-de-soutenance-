<?php
$page = 'Belleza Connection';
include 'parts/header.php'
?>




<div  class="login-form">
    <?php
    // renvois d'eereures mdp ou mail
    if (isset($_GET['login_err'])) {
        $err = htmlspecialchars($_GET['login_err']);

        switch ($err) {
                // s'affiche si le mdp n'est pas correct 
            case 'password':
    ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe incorrect
                </div>
            <?php
                break;
                // s'affiche si le mail n'est pas correct 
            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email incorrect
                </div>
            <?php
                break;
                // s'affiche si le mail existe dns la  base de donnée 
            case 'already':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte non existant
                </div>
    <?php
                break;
        }
    }

    // $_SESSION['nom']=$_POST['nom']
    ?>

  <div class="pt-5 pb-5">
  <form action="connection_traitement.php " method="post">
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit"  class="btn degradé text-white btn-block">Connexion</button>
        </div>
    </form>
    <div class="text-center">    <p class="text-center "><a  href="inscription.php">Inscription</a></p>
</div>
    <!-- <p class="text-center"><a href="deconnexion.php">changer de mot de passe</a></p> -->
  </div>
</div>





<?php
include 'parts/footer.php';
?>
