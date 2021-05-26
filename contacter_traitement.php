<?php
require_once(__DIR__ . '/vendor/autoload.php');
use \Mailjet\Resources;
define('API_PUBLIC_KEY', 'YOUR_KEY');
define('API_PRIVATE_KEY', 'YOUR_KEY');
$mj = new \Mailjet\Client('b1044fabb2c572cd1dcb11febf22a6ac','0ef154649689b2715b21303ccd0679ee',true,['version' => 'v3.1']);

 if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
                [
                  'From' => [
                    'Email' => "bellezafrance@outlook.fr",
                    'Name' => "aida"
                  ],
                  'To' => [
                    [
                      'Email' => "bellezafrance.contact@gmail.com",
                      'Name' => "aida"
                    ]
                  ],
                  'Subject' => "demande de rensaignement",
                  'TextPart' => "$email, $message",
                ]
              ]
        ];
        $response = $mj->post(Resources::$Email, ['body' => $body]);
        $response->success();
        echo "Email envoyé avec succès ! ";
        
        }
        else{
            echo "Email non valide";
        }

    }