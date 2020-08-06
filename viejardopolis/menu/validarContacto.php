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
require 'phpmailer/PHPMailerAutoload.php';
/*
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Prueba Juan < somosdevcore@gmail.com >\r\n";

$exito=mail("lumacajuanmanuel@gmail.com","Prueba","Probando envio de correos",$headers);
*/

$mail=new PHPMailer;
$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->Port=587;
$mail->SMTPAuth=true;
$mail->SMTPSecure='tls';
$mail->Username='somosdevcore@gmail.com';
$mail->Password='maildevcore';

$mail->setFrom($_POST['your-email'],$_POST['your-name']);
$mail->addAddress('somosdevcore@gmail.com'); //indica la dirección de quien envio el correo
$mail->addReplyTo($_POST['your-email'],$_POST['your-name']);

$mail->isHTML(True);
$mail->Subject=$_POST['your-subject'];
$mail->Body='<p>Nombre: ' . $_POST['your-name'] . ' <br> Teléfono ' . $_POST['telefono'] . '' . $_POST['your-message'] . ' </p>';
if(!$mail->send()){
    include 'contacto.php';
    echo $_SESSION['error'];
    //echo "error";
}else{
    include 'contacto.php';
    echo $_SESSION['enviado'];
    //echo "correo enviado con exito";
}



?>