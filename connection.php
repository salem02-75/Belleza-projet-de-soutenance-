<?php
$page = 'Belleza Connection';
include 'parts/header.php'
?>


<head>
<link rel="stylesheet" href="style/connection.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>


<div class="login-form">
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

    <form action="connection_traitement.php" method="post">
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
    </form>
    <p class="text-center"><a href="inscription.php">Inscription</a></p>
    <!-- <p class="text-center"><a href="deconnexion.php">changer de mot de passe</a></p> -->
</div>

<div>
    <a href="playlist.php"><button class="btn btn-primary btn-block">decouvrez notre playlist zen ! </button></a>

</div>



<?php
include 'parts/footer.php';
?>
