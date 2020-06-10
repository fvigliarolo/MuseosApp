<?php
class usuario{

  var $usuario_doc;
  var $usuario_nombre;
  var $usuario_apellido;
  var $usuario_fnac;
  var $usuario_correo;
  var $usuario_pass;
  var $usuario_celular;


  function setUsuario($usuario_doc){
  include_once("connectBD.php");
   $Sentencia_sql="select p.*, i.*, dg.*, a* 
   from persona p, Invitado i, Docente_Guia dg, Administrador a
   where p.Documento=i.DocumentoInvitado or p.Documento=dg.DocumentoDocente_Guia or p.Documento=a.DocumentoAdministrador;";
   $resultado = conectar($Sentencia_sql);

  while ($usuario = mysqli_fetch_array($resultado)){
    $this->usuario_doc = $usuario ["usuario_doc"];
    $this->usuario_nombre = $usuario ["usuario_nombre"];
    $this->usuario_apellido = $usuario ["usuario_apellido"];
    $this->usuario_fnac = $usuario ["usuario_fnac"];
    $this->usuario_correo = $usuario["usuario_correo"];
    $this->usuario_pass = $usuario["usuario_pass"];
    $this->usuario_celular = $usuario["usuario_celular"];

  }

}





}




 ?>
