
<?php
include_once('usuario.php');
session_start();
include("connectBD.php");
$_SESSION['usuario']=$_REQUEST['campo_mail_html'];
$_SESSION['password']=$_REQUEST['campo_password_html'];




//$conexion=mysqli_connect("34.71.137.32","Juan","lumaca","MuseosBD") or
//die("problema en la conexion");

$sql="select  Correo, Pass,Tipo,Persona from Usuario where Correo='".$_REQUEST['campo_mail_html']."' and Pass='".$_REQUEST['campo_password_html'] ."';";
//commit

//$resultado = conectar($sql);


//$sql=" select * from usuario where usuario_mail='".$_REQUEST['campo_mail_html']."' and usuario_password='".$_REQUEST['campo_password_html']."';";

$resultado=conectar($sql);

$exito=false;
while($reg=mysqli_fetch_array($resultado)){
  $exito=true;
  $correo = $reg["Correo"];
  $pass = $reg["Pass"];
  $verifica = $reg["Tipo"];
  $persona = $reg["Persona"];

}

if (($exito==true) && ($verifica=="Invitado")){
/*
  $user = new usuario;
  $user->setUsuario($usuario_id);
  $_SESSION['ClaseUsuario'] = $user;

  header ("location: /Juego/Menu/menu.php");

echo "login exitoso";
*/

//verificar si es invitado, docente_guia o admin

$sqlinv="select * from Invitado where DocumentoInvitado=" . $persona . ";";
$listainvitado=conectar($sqlinv);
$exito=false;
while($reg=mysqli_fetch_array($listainvitado)){
  $exito=true;
}

if ($exito==true){
  //echo "login invitado";
 //echo $pasword_encriptado;

 header('Location: index.php');

}else{
  echo "no hay invitado";
}


}else if(($exito==true) && ($verifica=="Administrador")){

  $sqladmin="select * from Administrador where DocumentoAdministrador=" . $persona . ";";
  $listaadmin=conectar($sqladmin);
  $exito=false;
  while($reg=mysqli_fetch_array($listaadmin)){
    $exito=true;
  }
  
  if ($exito==true){
    include_once 'index.php';
   
   
    echo $_SESSION['menu'];
   
   
  }else{
    echo "no hay admin";
  }

}else{

    include_once 'login_arte.php';
    echo $_SESSION['errorlog'];








}

?>
