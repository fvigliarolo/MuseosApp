<?php 

class museo{
    var $id;
    var $nombre;
    var $departamento;
    var $ciudad;
    var $calle;
    var $numero;

    function setMuseo(){
        include_once("connectBD.php");
         $Sentencia_sql="select idMuseo.*,Nombre.*, Departamento.*, Ciudad.*, Calle.*, Numero.* 
         from Museo ;";
         $resultado = conectar($Sentencia_sql);

} 

?>