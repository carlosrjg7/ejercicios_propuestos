<?php
require_once ('../modelo/conexion.php');

$cedula =   $_REQUEST['Tced'];



$conectar = new conexion;



if (!empty($cedula)){



		$validar = "SELECT * FROM trabajador WHERE cedula=".$cedula."";
        $validacion = $conectar->consultar($validar);
        if (empty($validacion)){

        	echo 'El Trabajador que intenta eliminar no existe';
        }else {


			$sql = "DELETE FROM trabajador WHERE cedula=".$cedula."";

			$respuesta = $conectar->eliminar($sql);

			echo $respuesta;
				}


} else {

echo 'No se admiten campos vacios';


}

?>