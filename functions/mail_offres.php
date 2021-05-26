<?php
$_mail_state=false;

if (
    isset($_POST["email"]) &&
 isset($_POST["content"])
//  &&
//  isset($_POST["objet"])
 )

 {
   
    $to = $res[0]["email"];
    // $subject = $_POST["objet"];

    $subject = "contact de : " . $_POST["email"];
    $content = $_POST["content"];

    if(mail($to, $subject, $content)){
        $_mail_state=true;
    }

}



?>