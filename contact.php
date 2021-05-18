<?php
include 'parts/header.php';
?>


<php $VotreAdresseMail="salemaida@live.fr" ; if(isset($_POST['envoyer'])) { if(empty($_POST['mail'])) { echo " Le champ mail est vide" ; } else { if(!preg_match(" #^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])) { echo " L adresse mail entrée est incorrecte" ; }else{ if(empty($_POST['sujet'])) { echo "Le champ sujet est vide" ; }else{ if(empty($_POST['message'])) { echo "Le champ message est vide" ; }else{ $Entetes="MIME-Version: 1.0\r\n" ; $Entetes .="Content-type: text/html; charset=UTF-8\r\n" ; $Entetes .="From: Nom de votre site <" .$_POST['mail'] ; $Entetes .="" ; $Mail=$_POST['mail']; $Sujet='=?UTF-8?B?' .base64_encode($_POST['sujet']).'?='; 
 $Message=htmlentities($_POST[' message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre echo "Le mail à été envoyé avec succès!" ; } else { echo "Une erreur est survenue, le mail n'a pas été envoyé" ; } } } } } } ?>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contact</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#accordion").accordion();
            });
        </script>

        <head>
            <form action="traitement.php" method="post">
                <p>
                    <strong>Nom<span style="color: #ff0000;">*</span> :</strong> <label for="nom"> </label> <input id="nom" name="nom" size="28" type="text" />
                    <strong>Prénom :</strong> <label for="prenom"></label> <input id="prenom" name="prenom" size="27" type="text" /> <br /><br />
                    <strong> Société : </strong><br /> <label for="societe"> </label> <input id="societe" name="societe" size="81" type="text" /> <br /><br />
                    <strong> RCS : </strong><br /> <label for="rcs"> </label> <input id="rcs" name="rcs" size="81" type="text" /> <br /><br />
                    <strong>Adresse : </strong><br /> <label for="adresse"></label> <input id="adresse" name="adresse" size="81" type="text" /> <br /><br />
                    <strong>Code Postal :</strong> <label for="code"></label> <input id="code" name="code" size="13" type="text" />
                    <strong>Ville : </strong> <label for="ville"></label> <input id="ville" name="ville" size="39" type="text" /> <br /><br />
                    <strong>Téléphone<span style="color: #ff0000;">*</span> :<label for="telephone"></label></strong> <input id="telephone" name="telephone" size="27" type="text" />
                    <strong>Fax :</strong> <label for="fax"></label> <input id="fax" name="fax" size="27" type="text" /> <br /> <br />
                    <strong>Mail <span style="color: #ff0000;">*</span> : </strong><br /> <label for="mail"> </label><input id="mail" name="mail" size="81" type="text" />
                </p>
                <p>Pour quelle raison nous contactez-vous ?</p>
                <label for="motif"></label> <select id="motif" name="motif">
                    <option value="reglement">Pour un renseignement</option>
                    <option value="enquete_commerciales">Pour une vidéo</option>
                    <option value="enquete_civile">Pour un article</option>
                    <option value="recouvrement">Pour autre chose</option>
                </select>
                <p>Message <span style="color: #ff0000;">*</span> :</p>
                <p><label for="message"></label> <textarea id="message" cols="52" rows="7" name="message"></textarea></p>
                <input type="reset" value="Effacer" /> <input type="submit" value="Envoyer" />
                <p> </p>
            </form>

            <main class="fond-on">

                <section class="block">
                    <!-- premiere partie information du prestataire  -->
                    <div class="partie-1">

                        <div>
                            <!-- nom et logo du prestataire -->
                            <div class="identite">
                                <img class="pp" class="rounded-circle" src="images/pp-profil.jpg" alt="">

                                <h1>MARIE Arnauld </h1>
                            </div>

                            <div class="note">
                                <!-- etoiles atribuer  -->
                                <p> &#x2605; &#x2605; &#x2605; &#x2605; &#x2605; </p>
                                <!-- ville du prestataire -->
                                <p>Paris</p>
                            </div>
                            <!-- informations sur le prestataire  -->
                            <div class="description">
                                <p>
                                    The standard chunk of Lorem Ipsum used since the 1500s is reproduced
                                    below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus
                                    Bonorum et Malorum" by Cicero are also reproduced in their exact original form,
                                    accompanied by English versions from the 1914 translation by H. Rackham.
                                </p>
                            </div>
                            <!-- planning dates dispo horraires etc -->
                            <div>
                                <div>

                                </div>
                                <button>option deux</button>
                            </div>
                        </div>
                        <!-- images de la prestation demander  -->
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="10000">
                                    <img src="images/massage.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Prestation</h5>
                                        <p>Massage à l'ayurveda aux huils de fleurs d'oranger et de sakura</p>
                                    </div>
                                </div>
                                <div class="carousel-item" data-bs-interval="2000">
                                    <img src="images/pp-profil.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Lieu</h5>
                                        <p>Lieu zen avec un esprit floral</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="images/esthétique.jpg" class="d-block w-100" alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Pratitien</h5>
                                        <p>Marie diplomé depuis 3ans</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <!-- block contact avec contact deroulant  -->
                    <div class="contact">

                        <button type="button" class="btn btn-outline-secondary">&#8593;</button>

                        <div class="contact-child">

                            <a href="">
                                <form>

                                    <label>Sexe</label>

                                    <!-- Radiobutton -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="radio1">
                                        <label class="custom-control-label" for="radio1">homme</label>
                                    </div>

                                    <!-- Radiobutton -->
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="radio1">
                                        <label class="custom-control-label" for="radio1">femme</label>
                                    </div>


                                </form>

                                <form action="contact.php" method="post">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="mail">Prenom</label>
                                                <input id="mail" class="form-control" type="text" name="" placeholder="Entrer votreprenom">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="numéro">Nom</label>
                                                <input id="numéro" class="form-control" type="text" name="" placeholder="Entrer votre nom">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="mail">Mail</label>
                                                <input id="mail" class="form-control" type="text" name="" placeholder="Entrer votre mail">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="numéro">Numéro</label>
                                                <input id="numéro" class="form-control" type="text" name="" placeholder="Entrer votre numéro">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-12">
                                                <label for="adresse">Adresse</label>
                                                <input id="adresse" class="form-control" type="text" name="" placeholder="Entrer votre adresse">
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary">Envoyer</button>
                                </form>


                                </form>
                                <form>
                                    <button class="btn btn-danger">je souhaite etre recontacter par telephone
                                    </button>
                                    <button class="btn btn-warning">je souhaite etre recontacter par mail
                                    </button>
                                    <button class="btn btn-success">envoyer validation de rdv par mail
                                    </button>
                                    <button class="btn btn-primary">envoyer validation de rdv par sms
                                    </button>
                                </form>
                            </a>

                        </div>
                    </div>
                </section>


            </main>









        </head>

    </html>


<?php
/* Récupération des informations du formulaire*/
if (get_magic_quotes_gpc())
{
 $nom = stripslashes(trim($_POST['nom']));
 $prenom = stripslashes(trim($_POST['prenom']));
 $dossier = stripslashes(trim($_POST['dossier']));    
 $societe = stripslashes(trim($_POST['societe']));
 $rcs = stripslashes(trim($_POST['rcs']));
 $code = stripslashes(trim($_POST['code']));
 $ville = stripslashes(trim($_POST['ville']));
 $telephone = stripslashes(trim($_POST['telephone']));
 $fax = stripslashes(trim($_POST['fax']));
 $mail = stripslashes(trim($_POST['mail']));
 $motif = stripslashes(trim($_POST['motif']));
 $message = stripslashes(trim($_POST['message']));
}     
else      
{
 $nom = trim($_POST['nom']);
 $prenom = trim($_POST['prenom']);
 $dossier = trim($_POST['dossier']);
 $societe = trim($_POST['societe']);
 $rcs = trim($_POST['rcs']);
 $adresse = trim($_POST['adresse']);
 $code = trim($_POST['code']);
 $ville = trim($_POST['ville']);
 $telephone = trim($_POST['telephone']);
 $fax = trim($_POST['fax']);
 $mail = trim($_POST['mail']);
 $motif = trim($_POST['motif']);
 $message = trim($_POST['message']);
}
/*Vérifie si l'adresse mail est au bon format */
 $regex_mail = '/^[-+.w]{1,64}@[-.w]{1,64}.[-.w]{2,6}$/i'; 
 /*Verifie qu il n y est pas d en tête dans les données*/
$regex_head = '/[nr]/';   
/*Vérifie qu il n y est pas d erreur dans adresse mail*/
 if (!preg_match($regex_mail, $mail))
 {
 $alert = 'Ladresse '.$mail.' nest pas valide';      
 }
 else
{ 
 $courriel = 1;
}   
/* On affiche l'erreur s'il y en a une */ 
if (!empty($alert))
{
 $courriel = 0;
}     
/* On vérifie qu'il n'y a aucun header dans les champs */ 
if (preg_match($regex_head, $nom)
 || preg_match($regex_head, $prenom)
 || preg_match($regex_head, $dossier)
 || preg_match($regex_head, $societe)
 || preg_match($regex_head, $rcs)
 || preg_match($regex_head, $adresse)
 || preg_match($regex_head, $code)
 || preg_match($regex_head, $ville)
 || preg_match($regex_head, $telephone)
 || preg_match($regex_head, $fax)
 || preg_match($regex_head, $mail)
 || preg_match($regex_head, $motif)
 || preg_match($regex_head, $message))
{  
 $alert = 'En-têtes interdites dans les champs du formulaire'; 
}
else
{ 
 $header = 1;
}   
/* On affiche l'erreur s'il y en a une */ 
if (!empty($alert))
{
 $header = 0;
}
if (empty($telephone) 
 || empty($nom) 
 || empty($message))
{  
 $alert = 'Tous les champs doivent être renseignés';
} 
else
{  
 $renseigne = 1;
}   
/* On affiche l'erreur s'il y en a une */ 
if (!empty($alert))
{
 $renseigne = 0;
}
/* Si les variables sont bonne */
if ($renseigne == 1 AND $header == 1 AND $courriel == 1)
{
/*Envoi du mail*/

/*Le destinataire*/
$to="demo@fafa-informatique.com";

/*Le sujet du message qui apparaitra*/
$sujet="Message depuis le site";
$msg = '';
/*Le message en lui même*/
/*$msg = 'Mail envoye depuis le site' "rnrn";*/
$msg .= 'Nom : '.$nom."rnrn";
$msg .= 'Prenom : '.$prenom."rnrn";
$msg .= 'Dossier : '.$dossier."rnrn";
$msg .= 'Societe : '.$societe."rnrn";
$msg .= 'RCS : '.$rcs."rnrn";
$msg .= 'Adresse : '.$adresse."rnrn";
$msg .= 'Code : '.$code."rnrn";
$msg .= 'Ville : '.$ville."rnrn";
$msg .= 'Telephone : '.$telephone."rnrn";
$msg .= 'Fax : '.$fax."rnrn";
$msg .= 'Mail : '.$mail."rnrn";
$msg .= 'Motif : '.$motif."rnrn";
$msg .= 'Message : '.$message."rnrn";
/*Les en-têtes du mail*/
$headers = 'From: MESSAGE DU SITE FAFA<demo@fafa-informatique>'."rn";
$headers .= "rn";
/*L'envoi du mail - Et page de redirection*/
mail($to, $sujet, $msg, $headers);
header('Location:http://www.fafa-informatique.com');
}
else
{
header('Location:http://www.fafa-informatique.com');
}
?>


    <?php
    include 'parts/footer.php';
    ?>

    <style>
        .identite {
            display: flex;
            margin: 15px;
        }

        .identite img {
            margin-right: 15px;
        }

        .note {
            display: flex;
            justify-content: space-around;
        }

        .partie-1 {
            display: flex;
            margin: 20px;
            text-align: center;
            justify-content: space-around;

        }

        .partie-1 p {
            width: 200px;
            text-align: left;
        }

        .pp {
            width: 50px;
            border-radius: 25px;
        }

        .pc {
            width: 400px;
            margin-top: 50px;
        }

        .block {

            display: flex;

            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin: 50px;
            background-color: #00000021;


        }



        .contact {
            position: relative;
            display: inline-block;
            justify-content: center;
        }

        .contact-child {
            display: none;
            background-color: rgba(255, 255, 255, .4);
            min-width: 50px;

        }



        .contact:hover .contact-child {
            display: block;
        }
    </style>