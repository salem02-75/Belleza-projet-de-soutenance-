<?php
include 'parts/header.php';
?>

<?php

require ('connect_profil.php');


if(isset($_POST['submit'])){ //si le bouton valider a ete enclancher 

    if(isset($_POST['proffesionel'], $_POST['particuiler'])){

        if(isset($_POST['submit']) != "" && $_POST['proffesionel'] != "" ){
           
            $proffesionel = $_POST['proffesionel'];
            $particulier = $_POST["particulier"];
            
         $insertion = "INSERT INTO table_profil (proffesionel, particulier) VALUES(".$_POST['proffesionel'].", ".$_POST['particulier'].");";
    }
    
 
        $execute =$pdo->query($insertion);

        if($execute == true){
            $msgSucces = "vous allez etre rediriger vers votre categorie";
        
        }else{
            $msgError = "une erreure est survenue";
        }
   }
    }


?>


<div>
<?php
if(isset($msgError)){
    echo $msgError;
}elseif(isset($msgSucces)){
    echo $msgSuccess;
}
?>
</div>

<form action='ProfilChoix.php' method="POST">

<button>
 Proffessionel</button>

 <button>
Particulier</button>

 <button type="submit" id="submit"> Valider</button>
</form>








<?php
include 'parts/footer.php';
?>