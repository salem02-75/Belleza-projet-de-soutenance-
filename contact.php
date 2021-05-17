<?php
include 'parts/header.php';
?>


<php $VotreAdresseMail="votreemail@votresite.tld" ; if(isset($_POST['envoyer'])) { if(empty($_POST['mail'])) { echo " Le champ mail est vide" ; } else { if(!preg_match(" #^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){ echo " L adresse mail entrée est incorrecte" ; }else{ if(empty($_POST['sujet'])) { echo "Le champ sujet est vide" ; }else{ if(empty($_POST['message'])) { echo "Le champ message est vide" ; }else{ $Entetes="MIME-Version: 1.0\r\n" ; $Entetes .="Content-type: text/html; charset=UTF-8\r\n" ; $Entetes .="From: Nom de votre site <" .$_POST['mail'] ; $Entetes .="" ; $Mail=$_POST['mail']; $Sujet='=?UTF-8?B?' .base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d' être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine) $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre echo "Le mail à été envoyé avec succès!" ; } else { echo "Une erreur est survenue, le mail n'a pas été envoyé" ; } } } } } } ?>

    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>contact</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function() {
                $("#accordion").accordion();
            });
        </script>

        <head>


            <main class="fond-on">

                <section class="block">
                    <!-- premiere partie information du prestataire  -->
                    <div class="partie-1">

                        <div>
                            <!-- nom et logo du prestataire -->
                            <div class="identite">
                                <img class="pp" src="images/pp-profil.jpg" alt="">
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
                        <div>
                            <img class="pc
                            " src="images/img_coiffure.jpeg" alt="">
                        </div>

                    </div>
                    <!-- block contact avec contact deroulant  -->
                    <div class="contact">
                        <button class="swip"> &#8593;</button>

                        <div class="contact-child">

                            <a href="">

                                <form action="contact.php" method="post">

                                    Mail: <input type="text" name="mail" value="" />
                                    <br />
                                    Sujet: <input type="text" name="sujet" value="" />
                                    <br />
                                    Message: <textarea name="message" cols="40" rows="20"></textarea>
                                    <br />
                                    <input type="submit" name="envoyer" value="Envoyer" />


                                </form>
                            </a>

                        </div>
                    </div>
                </section>


            </main>
        </head>

    </html>





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

        .description {
            /* background-color:#6ce5e8 ; */
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

        .swip {
            background-color: #e86f6c;
            color: white;
            border: none;
            cursor: pointer;
            padding: 20px;
            margin-top: 10px;
            font-size: 30px;
            /* height: 25px; */
        }

        .swip:hover {
            background-color: #eb9a95;
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

        .contact-child a {
            color: black;
            padding: 20px;
            text-decoration: none;
            display: block;
            margin: 10px;
        }

        .contact:hover .contact-child {
            display: block;
        }
    </style>