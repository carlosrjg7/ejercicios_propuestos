<?php
require_once ('../modelo/conexion.php');

$cedula =   $_REQUEST['Tced'];
$nombre =   $_REQUEST['Tnom'];
$apellido = $_REQUEST['Tape'];
$correo =   $_REQUEST['Tcor'];
$cargo =    $_REQUEST['Tcar'];
$estatus =  $_REQUEST['Test'];


$conectar = new conexion;



if (!empty($cedula) && !empty($nombre) && !empty($apellido) && !empty($correo) && !empty($cargo)) {



		$sql = "UPDATE trabajador SET cedula=".$cedula.",nombre='".$nombre."',apellido='".$apellido."',correo='".$correo."',cargo='".$cargo."',estatus='".$estatus."' WHERE cedula=".$cedula." ";



	$respuesta = $conectar->modificar($sql);


	echo $respuesta;

} else {

echo 'No se admiten campos vacios';


}

?>