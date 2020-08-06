<?php 

class exposicion{
    var $id;
    var $nombre;
    var $año;
    var $autor_nombre;
    var $autor_apellido;
    var $descripcion;
    var $foto;
    var $fecha_ingreso;
    var $fecha_salida;

    function setMuseo(){
        include_once("connectBD.php");
       /*  $Sentencia_sql="select idMuseo.,Nombre., Departamento., Ciudad., Calle., Numero. 
         from Museo ;";
         $resultado = conectar($Sentencia_sql);

         while ($museo = mysqli_fetch_array($resultado)){
            $this->id = $museo ["id"];
            $this->nombre = $museo ["museo_nombre"];
            $this->departamento = $museo ["departamento"];
            $this->ciudad = $museo ["ciudad"];
            $this->calle = $museo["calle"];
            $this->numero = $museo["numero"];

} 
    }
}
*/
?>
