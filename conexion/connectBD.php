<?php
function conectar($sql){
$conexion = mysqli_connect("34.71.137.32","root","root") or die ("Problema con la conexion");
mysqli_select_db($conexion,"MuseosBD");

$resultado = mysqli_query($conexion,$sql) or die (mysqli_error($conexion));

return $resultado;
}
 ?>
