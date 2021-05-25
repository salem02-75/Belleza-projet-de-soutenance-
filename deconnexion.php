<?php 
    session_start(); // demarrage de la session
    session_destroy(); // on détruit la session, si il y a plusieurs sessions utiliser le unset()
    header('Location:indexx.php'); // On redirige
    die();

   

    //  LA PAGE DE S4AFFICHE PLUS 
    // ELLE N EST PAS RELIER A UN BOUTON DECONNECTION 

    ?>