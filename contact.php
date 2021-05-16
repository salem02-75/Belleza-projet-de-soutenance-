<?php
include 'parts/header.php';
?>


<php



$VotreAdresseMail="votreemail@votresite.tld";
if(isset($_POST['envoyer'])) { 
    if(empty($_POST['mail'])) {
        echo "Le champ mail est vide";
    } else {
       
        if(!preg_match("#^[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?@[a-z0-9_-]+((\.[a-z0-9_-]+){1,})?\.[a-z]{2,}$#i",$_POST['mail'])){
            echo " L adresse mail entrée est incorrecte";
        }else{
            if(empty($_POST['sujet'])) {
                echo "Le champ sujet est vide";
            }else{
                if(empty($_POST['message'])) {
                    echo "Le champ message est vide";
                }else{
                    $Entetes = "MIME-Version: 1.0\r\n";
                    $Entetes .= "Content-type: text/html; charset=UTF-8\r\n";
                    $Entetes .= "From: Nom de votre site <".$_POST['mail'] ;
                    $Entetes .= "";
                   
                    $Mail=$_POST['mail']; 
                    $Sujet='=?UTF-8?B?'.base64_encode($_POST['sujet']).'?=';//Cet encodage (base64_encode) est fait pour permettre aux informations binaires d'être manipulées par les systèmes qui ne gèrent pas correctement les 8 bits (=?UTF-8?B? est une norme afin de transmettre correctement les caractères de la chaine)
                    $Message=htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");//htmlentities() converti tous les accents en entités HTML, ENT_QUOTES Convertit en + les guillemets doubles et les guillemets simples, en entités HTML
                    
                    if(mail($VotreAdresseMail,$Sujet,nl2br($Message),$Entetes)){//la fonction nl2br permet de conserver les sauts de ligne et la fonction base64_encode de conserver les accents dans le titre
                        echo "Le mail à été envoyé avec succès!";
                    } else {
                        echo "Une erreur est survenue, le mail n'a pas été envoyé";
                    }
                }
            }
        }
    }
}
?>

<head>


<main>

<form action="contact.php" method="post">
    Mail: <input type="text" name="mail" value="" />
    <br />
    Sujet: <input type="text" name="sujet" value="" />
    <br />
    Message: <textarea name="message" cols="40" rows="20"></textarea>
    <br />
    <input type="submit" name="envoyer" value="Envoyer" />


</form>
</main>
</head>







<?php
include 'parts/footer.php';
?>