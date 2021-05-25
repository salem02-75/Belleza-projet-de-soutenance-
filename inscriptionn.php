<?php 
include 'parts/header.php'
?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <title>inscription</title>
        </head>
        <body>
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
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);
                    // switch equivalent de if, si la valeur contenu dans la case est bonne alors elle s'execute, break permet de dire qu'on dois sortire du switch 
                    // c'est d'un point de vue visuel plus simple que if else if 
                    switch($err)
                    {
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

                <!--    parties inscriptions qui ne sont pas misent dans la base de donnée -->

                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="prenom" name="email" class="form-control" placeholder="Prenom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="ville" name="ville" class="form-control" placeholder="Ville" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="genre" name="email" class="form-control" placeholder="Genre" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="proffession" name="proffession" class="form-control" placeholder="Proffession" required="required" autocomplete="off">
                </div>
                <!------------------------------------------------------------------------------------------------------------------>     
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
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                    <a href="indexx.php">se connecter</a>
                </div>   
            </form>
        </div>
        <style>
            .login-form {
                width: 340px;
                margin: 50px auto;
            }
            .login-form form {
                margin-bottom: 15px;
                background: #f7f7f7;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                padding: 30px;
            }
            .login-form h2 {
                margin: 0 0 15px;
            }
            .form-control, .btn {
                min-height: 38px;
                border-radius: 2px;
            }
            .btn {        
                font-size: 15px;
                font-weight: bold;
            }
        </style>
        </body>
</html>

<?php
include 'parts/footer.php';
?>

<style>
   * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.base {
  width: 500px;
  border-top: 5px solid gray;
  margin: auto;
  text-align: center;
  position: relative;
  padding: 0 0 30px;
}

.holder {
  width: 30px;
  height: 20px;
  background: black;
  margin: auto;
  border-radius: 0 0 50% 50%;
}

.thread {
  display: inline-block;
  width: 2px;
  height: 200px;
  background: black;
  border-radius: 5px;
  position: relative;
  transform-origin: 50% 0;
  animation: moveIt 2.5s ease-in-out infinite;
}

.thread:after {
  content: "";
  position: absolute;
  width: 5px;
  height: 5px;
  border-radius: 50%;
  background: red;
  border: 2px solid white;
  top: -4.5px;
  left: -3.5px;
}

.knob {
  width: 10px;
  height: 10px;
  position: absolute;
  top: -18px;
  left: -4.5px;
  border: 2px solid rgba(255, 255, 255, .5);
  border-radius: 50%;
  border-bottom: 2px solid transparent;
}

.pendulum {
   width: 160px;
  background: -moz-radial-gradient(circle at 70% 35%, white, #66d63e 30%, #40a31d 50%);
  background: -webkit-radial-gradient(circle at 70% 35%, white, #66d63e 30%, #40a31d 50%);
  background: -o-radial-gradient(circle at 70% 35%, white, #66d63e 30%, #40a31d 50%);
  background: -ms-radial-gradient(circle at 70% 35%, white, #66d63e 30%, #40a31d 50%);
  background: radial-gradient(circle at 70% 35%, white, #66d63e 30%, #40a31d 50%);
    border-radius: 10%;
    position: absolute;
    bottom: -37px;
    left: -77px;
    font-size: 20px;
    padding: 10px 20px;
}

.shadow {
  width: 30px;
  height: 15px;
  background: rgba(0, 0, 0, 0.2);
  border-radius: 50%;
  margin: 50px auto 0;
  animation: moveShade 1.25s ease-in-out alternate infinite;
}

@keyframes moveIt {
  0%, 100% {
    transform: rotate(45deg);
  }
  50% {
    transform: rotate(-45deg);
  }
}

@keyframes moveShade {
  0% {
    transform: translateX(-220px) scale(1.4, .5);
    filter: blur(20px);
  }
  50% {
    filter: blur(3px);
  }
  100% {
    transform: translateX(220px) scale(1.4, .5);
    filter: blur(20px);
  }
}
</style>


<!-- 
NE RENVOIS A AUCUNES PAGES
LES NOUVEAUX ELEMENTS DE LA CLASSE DE LA BDD NE SE CONNECT PAS A LA BDD 
-->
