<?php
include 'parts/header.php';
?>

<?php

$pdo = null;
$dsn = 'mysql: host=localhost; dbname=admin';
$dbUser = 'admin';
$pw = "0000";

try{
    $pdo = new PDO($dsn, $dbUser, $pw);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
}

catch (PDOException $e){
    echo 'Connection failed' . $e->getMessage();
}
$pdo->query("SET NAMES UTF8");


if(isset($_POST['submit'])){ //si le bouton valider a ete enclancher 

    if(isset([$_POST['proffesionel'],$_POST['particuiler']])){
     if($_POST['proffesionnel'] != "" && $_POST['particulier'] !=""){
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

<button><input type="'text"
 name="proffesionel" >Proffessionel</button>

 <button><input type="'text"
 name="particulier" >Particulier</button>

 <button type="submit" id="submit"> Valider</button>
</form>
































<main class="mb-5">
    <div class="container">
        <div class="row">
        <!-- Titre / Presentation / Buttom -->
            <div class="col-xl-6 col-md-6 col-sm-12">
                <!-- Titre -->
                <div class="mb-5 mt-5">
                    <h2>Choix profil</h2>
                </div>
                <!-- Présentation -->
                <div class="mb-5">
                    <p>veuillez choisir votre categorie </p>
                </div>
                <!-- Bouton -->
                <div class="d-flex justify-content-end">
                    <a class="button_belleza justify-content-end" href="inscription.php">Proffessionel</a>
                </div>

                <div class="d-flex justify-content-end">
                    <a class="button_belleza justify-content-end" href="inscription.php">Particulier</a>
                </div>

            </div>



            </div>
        </div>
        



    </div>


</main>




<?php
include 'parts/footer.php';
?>