

<?php
// $page est une variable qui represente le titre de la page qui se trouve en parts/header.php
$page = 'inscription';
include 'parts/header.php';
include 'functions/connect.php';
// lance la fonction de connection a la db
$dbh = db_connect();
// $sql est la direction de la tab dans la base de donné qui agis sur functions/connect.php
$sql = "SELECT * FROM `inscription` ";
$res = request_sql($dbh, $sql);
include 'functions/tronque.php';
?>
<?php



$conn=mysqli_connect('localhost','root','','admin');
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$EMAIL=$_POST['email'];
$PWD=$_POST['pwd'];

$req="INSERT INTO inscription (nom,prenom,email,password) values ('$NOM',$PRENOM,$EMAIL,'$PWD')";

$res=mysqli_query($conn,$req);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'inscription</title>
</head>

<body>

    <form method="POST" action="formulaire_inscription.php">
        <table align="center"> 
            <tr>
                <td  align="right">
                    nom
                </td>
                <td>
                    <input type="text" name="nom" placeholder="votre nom ... ">
                </td>
            </tr>
            <tr>
                <td  align="right">
                    Prenom
                </td>
                <td>
                    <input type="text" name="prenom"  placeholder="votre prenom ... ">
                </td>
            </tr>
            <tr>
                <td  align="right">
                    Email
                </td>
                <td>
                    <input type="email" name="email"  placeholder="votre email ... ">
                </td>
            </tr>
            <tr>
                <td  align="right">
                    Mot de passe
                </td>
                <td>
                    <input type="password" name="pwd">
                </td>
            </tr>
            <tr>
                <td>
                </td>
                <td>
                    <input type="submit" name="forminscription"  placeholder="votre mot de passe ... " value="save">
                </td>
            </tr>
        </table>

    </form>

</body>

</html>