

<!DOCTYPE html>
            <html lang="es">

            <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <meta name="description" content="">
                <meta name="author" content="">

                <title></title>

                <!-- Bootstrap Core CSS -->
                <link href="css/bootstrap.min.css" rel="stylesheet">

            </head>


 <body >

 <div class="container">           

<div class="panel panel-default col-lg-10">
<div class="panel-heading">Registro de Trabajador</div>


<form class="form-horizontal" method="post" action="controladores/Registrar.php">
<fieldset>

<!-- Form Name -->
</br>
</br>
</br>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtCedulaS">Cedula</label>  
  <div class="col-md-3">
  <input id="txt0" name="txt0" type="text" placeholder="" class="form-control input-md" required="" value="" onkeypress="return soloNum(event)" onpaste="return false">
  </div>

<div class="col-md-3">   
    <button type="button" id="btnBuscar" name="btnBuscar" class="btn btn-info" onclick="buscarTrabajador()">Buscar</button>
</div>  

</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtNombre">Nombre</label>  
  <div class="col-md-4">
  <input id="txt1" name="txt1" type="text" placeholder="" class="form-control input-md" required="" onkeypress="return sololetras (event)" onpaste="return false">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtApellido">Apellido</label>  
  <div class="col-md-4">
  <input id="txt2" name="txt2" type="text" placeholder="" class="form-control input-md" required="" onkeypress="return sololetras (event)" onpaste="return false">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtCorreo">Correo</label>  
  <div class="col-md-4">
  <input id="txt3" name="txt3" type="text" placeholder="" class="form-control input-md" required="" onblur="validarEmail (this)">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtCargo">Cargo</label>  
  <div class="col-md-4">
  <input id="txt4" name="txt4" type="text" placeholder="" class="form-control input-md" required="" onkeypress="return sololetras (event)" onpaste="return false">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmbEstatus">Estatus</label>
  <div class="col-md-4">
    <select id="txt5" name="txt5" class="form-control">
      <option value="1">Activo</option>
      <option value="0">Inactivo</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btn"></label>
  
  <div class="col-md-2">
    <button type="submit" id="btnGuardar" name="btnGuardar" class="btn btn-success">Guardar</button>
  </div>

<div class="col-md-2">
    <button type="button" id="btnModificar" name="btnModificar" class="btn btn-warning" onclick='modificarTrabajador ()'>modificar</button>
  </div>


<div class="col-md-2">
    <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger" onclick='EliminarTrabajador ()'>Eliminar</button>
  </div>


  <div class="col-md-2">
    <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-defoult" onclick='limpiar ()'>Limpiar</button>
  </div>


</div>



</fieldset>
</form>



</div>
</div>


  <script src="js/jquery.js"></script>

  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/funciones.js"></script>



</div>

</body>

</html>

