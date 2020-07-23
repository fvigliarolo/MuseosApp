<?php 

/*
require("class.phpmailer.php");
require("class.smtp.php");
$from="devcore@gmail.com";    
$to = "lumacajuanmanuel@gmail.com";
    $subject = "Prueba";
    $message = "correo enviado con exito";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);
    echo "The email message was sent.";

*/

$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Juan < somosdevcore@gmail.com >\r\n";

$exito=mail("lumacajuanmanuel@gmail.com","Prueba","Probando envio de correos",$headers);

if($exito){
    echo "correo enviado con exito";
}else{
    echo "error";
}



?>