<?php


class conexion{
	private $servidor = 'localhost';
    private $user = 'root';
    private $clave ='';
    private $bd = 'ejercicio';
	public $conex;

	
	public function conexion (){
		
	     	$this->conex = new mysqli($this->servidor,$this->user,$this->clave,$this->bd) or die('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
				
				if (!mysqli_connect_errno($this->conex)){ //echo 'conecto correctamente';
				}		
	}

	
	public function Insertar ($sql){

		$query = $this->conex->query($sql);

		if(!$query){

			$resol = 'Error al Agregar';
			
		}


		if($query){

			$resol = 'Se Agrego correctamente';

		}


		return ($resol);

	}


	
  
	
	   public function consultar ($sql){
				
    		

		$resultado = $this->conex->query($sql);

       $fila = mysqli_fetch_array($resultado);
		
		return $fila;
			     

	}


public function modificar ($sql){


  $resultado = $this->conex->query($sql);



		if ($resultado) {

			$respuesta = "modificado correctamente";

		    return $respuesta;
		

		} else {

			$respuesta = "Error al modificar: " . $conex->error;
		
		    return  $respuesta;
		

		}


	}



	public function eliminar ($sql){


  $resultado = $this->conex->query($sql);



		if ($resultado) {

			$respuesta = "Eliminado satisfactoriamente";

		    return $respuesta;
		

		} else {

			$respuesta = "Error al Eliminar: " . $conex->error;
		
		    return  $respuesta;
		

		}


	}


	
	public function desconectar (){
	 
	 $resp = mysqli_close($this->conex);
	
	 /*if ($resp = true){
		 
		 echo 'se cerro la conexion';
		 }else echo'error al cerrar conexion';
	
	*/
	
	}



	public function mensaje ($mensaje){


      echo "<script>
      
      alert('".$mensaje."');

      </script>";

	}



	public function redirec ($url){

     
     echo '<script>location.href="'.$url.'";</script>';


	}	
	
	
	}
	


?>