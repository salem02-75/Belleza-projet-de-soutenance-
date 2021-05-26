<?php
$page = 'Belleza inscription';
include 'parts/header.php'
?>





<div class="base">
    <div class="holder"></div>
    <div class="thread">
        <div class="knob"></div>
        <div class="pendulum">Rejoignez nous</div>
    </div>
    <div class="shadow"></div>
</div>
<div class="login-form">
    <?php
    if (isset($_GET['reg_err'])) {
        $err = htmlspecialchars($_GET['reg_err']);
        // switch equivalent de if, si la valeur contenu dans la case est bonne alors elle s'execute, break permet de dire qu'on dois sortire du switch 
        // c'est d'un point de vue visuel plus simple que if else if 

        switch ($err) {
            case 'success':
    ?>
                <div class="alert alert-success">
                    <strong>Succès</strong> inscription réussie !
                </div>
            <?php
                break;

            case 'password':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
                </div>
            <?php
                break;

            case 'email':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
            <?php
                break;

            case 'email_length':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email trop long
                </div>
            <?php
                break;

            case 'pseudo_length':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> pseudo trop long
                </div>
            <?php
            case 'already':
            ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte deja existant
                </div>
    <?php

        }
    }

    ?>

    <form action="inscription_traitement.php" method="post">
        <h2 class="text-center">Inscription</h2>


        <div class="form-group">
            <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="ville" class="form-control" placeholder="Ville" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="genre" class="form-control" placeholder="Genre" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="proffession" class="form-control" placeholder="Proffession" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
        </div>
        <div method="post" class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            <a href="connection.php">se connecter</a>
        </div>
    </form>
</div>

<?php
include 'parts/footer.php'
?>