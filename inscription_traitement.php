<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['genre']) && !empty($_POST['proffession']) && !empty($_POST['ville']))
    
   
    {
        // Patch XSS affin de securiser 
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $nom = htmlspecialchars($_POST['nom']);
          $prenom = htmlspecialchars($_POST['prenom']);
         $genre = htmlspecialchars($_POST['genre']);
         $proffession = htmlspecialchars($_POST['proffession']);
          $ville = htmlspecialchars($_POST['ville']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT pseudo, email, password FROM utilisateurs WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Salemaida@live.fr et salemaida@live.fr soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                            // On stock l'adresse IP
                            $ip = $_SERVER['REMOTE_ADDR']; 

                                // requete mot de passe oublier
                                // $insert = $bdd->prepare('INSERT INTO utilisateurs(pseudo, email, password, ip, token) VALUES(:pseudo, :email, :password, :ip, :token)');
                                // $insert->execute(array(
                                //     'pseudo' => $pseudo,
                                //     'email' => $email,
                                //     'password' => $password,
                                //     'ip' => $ip,
                                //     'token' =>  bin2hex(openssl_random_pseudo_bytes(24))
                                // ));
        
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO `utilisateurs` (`pseudo`, `nom`, `prenom`, `genre`, `proffession`,  `email`, `password`, `ip`) VALUES(:pseudo, :nom, :prenom, :genre, :proffession, :email, :password, :ip)');
                            $d = new DateTime('NOW');
                            $insert->execute(array(
                                ':pseudo' => $pseudo,
                                ':nom' => $nom,
                                ':prenom' => $prenom,
                                ':genre' => $genre,
                                ':proffession' => $proffession,
                                // ':ville' => $ville,
                                ':email' => $email,
                                ':password' => $password,
                                ':ip' => $ip,
                                // ':date_inscription' => $d->format('c')
                            ));
                           //die();
                            // On redirige avec le message de succès
                            header('Location:inscriptionn.php?reg_err=success');
                            die();
                        }else{ header('Location: inscriptionn.php?reg_err=password'); die();}
                    }else{ header('Location: inscriptionn.php?reg_err=email'); die();}
                }else{ header('Location: inscriptionn.php?reg_err=email_length'); die();}
            }else{ header('Location: inscriptionn.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscriptionn.php?reg_err=already'); die();}
    }