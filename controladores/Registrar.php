<?php
require_once ('../modelo/conexion.php');

$cedula = $_REQUEST['txt0'];
$nombre = $_REQUEST['txt1'];
$apellido = $_REQUEST['txt2'];
$correo = $_REQUEST['txt3'];
$cargo = $_REQUEST['txt4'];
$estatus = $_REQUEST['txt5'];


$conectar = new conexion;	



$validar = "SELECT cedula FROM trabajador WHERE cedula=".$cedula."";


$resp = $conectar->consultar($validar);

if (empty($resp)){



		$sql = "INSERT INTO trabajador (cedula,nombre,apellido,correo,cargo,estatus) 
				VALUES ('".$cedula."','".$nombre."','".$apellido."','".$correo."','".$cargo."','".$estatus."')";


	$respuesta = $conectar->Insertar($sql);

	$conectar->mensaje($respuesta);


	$url ="../index.php"; 
	$conectar->redirec($url);

} 

else {

$respuesta = "El usuario que intenta agregar ya existe";
  $conectar->mensaje($respuesta);

  $url ="../index.php"; 
	$conectar->redirec($url);


}



?>
