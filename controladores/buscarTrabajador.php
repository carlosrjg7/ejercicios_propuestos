<?php
require_once ('../modelo/conexion.php');

$ced = $_REQUEST['Tcedula'];



$sql = "SELECT * FROM trabajador WHERE cedula = '".$ced."'";



$conectar = new conexion;

$respuesta = $conectar->consultar($sql); 

if(empty($respuesta)){

echo 0;

}else{

$arreglo = array(utf8_encode($respuesta[0]),
				 utf8_encode($respuesta[1]),
				 utf8_encode($respuesta[2]),
				 utf8_encode($respuesta[3]),
				 utf8_encode($respuesta[4]),
				 utf8_encode($respuesta[5]),
				
								 );


echo json_encode($arreglo);



}

?>
