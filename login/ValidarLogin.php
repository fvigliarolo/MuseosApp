<?php
include_once('usuario.php');
session_start();
include_once("connectBD.php");
$_SESSION['usuario']=$_REQUEST['campo_mail_html'];
$_SESSION['password']=$_REQUEST['campo_password_html'];


$conexion=mysqli_connect("34.71.137.32","Juan","lumaca","MuseosBD") or
die("problema en la conexion");

$sql="select Documento, correo, Contraseña from persona where correo='".$_REQUEST['campo_mail_html']."' and Contraseña='".$_REQUEST['campo_password_html']."';";


$resultado = conectar($sql);


//$sql=" select * from usuario where usuario_mail='".$_REQUEST['campo_mail_html']."' and usuario_password='".$_REQUEST['campo_password_html']."';";

//$registro=mysqli_query($conexion,$sql) or die ("problema en el select".mysqli_error($conexion));

$exito=false;
while($reg=mysqli_fetch_array($resultado)){
  $exito=true;
  $usuario_id = $reg["Documento"];

}

if ($exito==true){
/*
  $user = new usuario;
  $user->setUsuario($usuario_id);
  $_SESSION['ClaseUsuario'] = $user;

  header ("location: /Juego/Menu/menu.php");

echo "login exitoso";
*/

//verificar si es invitado, docente_guia o admin
$conexion2=mysqli_connect("34.71.137.32","Juan","lumaca","MuseosBD") or
die("problema en la conexion");

$sqlinv="select p.Documento, i.DocumentoInvitado from persona p, Invitado i where p.Documento=i.DocumentoInvitado;";

$resultado2 = conectar($sqlinv);

$exito=false;
while($reg=mysqli_fetch_array($resultado2)){
  $exito=true;
  $usuario_id = $reg["Documento"];

}

if ($exito==true){
echo "login invitado";
}else{
  $conexion3=mysqli_connect("34.71.137.32","Juan","lumaca","MuseosBD") or
  die("problema en la conexion");
  
  $sqldocg="select p.Documento, dg.DocumentoDocente_Guia from persona p, Docente_Guia dg where p.Documento=dg.DocumentoDocente_Guia;";
  
  $resultado3 = conectar($sqldocg);
  
  $exito=false;
  while($reg=mysqli_fetch_array($resultado3)){
    $exito=true;
    $usuario_id = $reg["Documento"];
  
  }
  if ($exito==true){
    echo "login dg";
    }else{
echo "usted es admin";
    }



}





}else{
/*
    include_once 'entradaPrincipal.php';
    echo $_SESSION['errorlog'];

*/
    echo "login incorrecto";






}

?>
