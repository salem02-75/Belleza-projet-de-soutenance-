
<?php
session_start();
// si la session existe pas soit si l'on est pas connecté on redirige
if (!isset($_SESSION['user'])) {
    header('Location:connection.php');
    die();
}
// $_SESSION["utilisateurs"]= $utilisateurs;

?>


<?php
include 'parts/header.php'
?>


<!-- afin de changer le mot de passe -->
<div class="container">
    <div class="col-md-12">
        <?php
        if (isset($_GET['err'])) {
            $err = htmlspecialchars($_GET['err']);
            // switch equivalent de if ou els if 
            switch ($err) {
                case 'current_password':
                    echo "le mot de passe actuel est incorrect";
                    break;

                case 'success_password':
                    echo "Le mot de passe a bien été modifié !";
                    break;
            }
        }
        if (isset($_SESSION['utilisateurs'])) {
            echo "Bonjour " . $_SESSION['nom'];
        }
        ?>


<head>
<link rel="stylesheet" href="style/membre.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>




        <div class="text-center">
            <h1 class="p-5">Bonjour ! </h1>
            <a href="index.php" class="btn btn-danger btn-lg">Déconnexion</a>
            <!-- Bouton qui renvoie a la page changer de mdp -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#change_password">
                Changer mon mot de passe
            </button>
            <!-- VERSION DEUX 
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#avatar">
                Changer mon avatar
            </button>
            -->
        </div>

        <a href="nousContacter.php">nous contacter</a>
    </div>
</div>


<div class="modal fade" id="avatar" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Changer mon avatar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="layouts/change_avatar.php" method="POST" enctype="multipart/form-data">
                    <label for="avatar">Images autorisées : png, jpg, jpeg, gif - max 20Mo</label>
                    <input type="file" name="avatar_file">
                    <br />
                    <button type="submit" class="btn btn-success">Modifier</button>
                </form>
            </div>
            <br />
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Changer mon mot de passe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="layouts/change_password.php" method="POST">
                    <label for='current_password'>Mot de passe actuel</label>
                    <input type="password" id="current_password" name="current_password" class="form-control" required />
                    <br />
                    <label for='new_password'>Nouveau mot de passe</label>
                    <input type="password" id="new_password" name="new_password" class="form-control" required />
                    <br />
                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required />
                    <br />
                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>




<?php
include 'parts/footer.php';
?>