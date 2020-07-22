<?php 

$from="devcore@gmail.com";    
$to = "lumacajuanmanuel@gmail.com";
    $subject = "Prueba";
    $message = "correo enviado con exito";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";






?>