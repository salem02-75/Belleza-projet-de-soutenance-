<?php
include 'parts/header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    

<!-- 		ville 	adresse_mail 	mot_de_passe 	 	-->
<script type='text/javascript'>
    function myCallback(pos) {
        var myLatitude  = pos.latitude;
        var myLongitude = pos.longitude;
        var myAltitude  = pos.altitude;
    }
 
    /**
     * Test pour support de GeoLocation
     */
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(myCallback);
    }
</script>
<!-- input Prenom -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Prenom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>


<!-- input Nom -->

<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Nom</span>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
</div>

<!-- input mail -->

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Username" aria-label="Username">
  <span class="input-group-text">@</span>
  <input type="text" class="form-control" placeholder="belleza.com" aria-label="Server">
</div>




<!-- input selection proffession -->

<div class="input-group mb-3">
  <button class="btn btn-outline-secondary" type="button">Proffession</button>
  <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
    <option selected>Choisissez</option>
    <option value="1">Employé</option>
    <option value="2">Fonctionnaire</option>
    <option value="3">autres</option>
  </select>
</div>

<!--input selection sex -->
<div class="input-group">
  <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
    <option selected>sex</option>
    <option value="1">Femme</option>
    <option value="2">Homme</option>
    <option value="3">Autres</option>
  </select>
</div>


<!-- input pour recuperer image de profil -->
<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>

<a href="ConnectionCompte.php"> <button>envoyer</button> </a>
<p>En cliquant ici vous allez etre rediriger vers la connection</p>


</body>
</html>




<?php
    include 'parts/footer.php';
    ?>
