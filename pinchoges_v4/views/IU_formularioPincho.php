<?php
session_start(); 
include(__DIR__."/../var_globales.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>
 
</head>

<body>
   <!-- Cabecera -->
	<div class="form-group">
		<?PHP include(__DIR__."/IU_cabecera.php"); ?>
	</div>
    <form action="<?PHP echo raiz;?>controllers/establecimiento_controlador.php" enctype="multipart/form-data" method="post"> 
		<div class="form-group">
			<label for="name" class="label label-default">*Nombre del pincho: </label>
			<input type="text" class="form-control" name="nombrePin" placeholder="nombre del pincho" >
		</div>
		<div class="form-group" >
			<label for="name" class="label label-default">*Tipo: </label>
			<select class="form-control" name="tipoPin">
			  <option>frio</option>
			  <option>caliente</option>
			</select>
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">*Descripci&oacute;n: </label>
			<input type="text" class="form-control" name="descPin" placeholder="breve descripci&oacute;n" >
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">*Precio: </label>
			<input type="text" class="form-control" name="precioPin" placeholder="precio de venta" >
		</div>			
		<div class="form-group">
			<label for="name" class="label label-default">*Foto: </label>
			<input type="file" class="form-control" name="fotoPin">
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">Horario: </label>
			<select class="form-control" name="horarioPin">
			  <option></option>
			  <option>almuerzo</option>
			  <option>cena</option>
			  <option>almuerzo/cena</option>
			</select>
		</div>
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="EnviarFormulario" class="btn btn-default">Enviar Formulario</button>
			<button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-default">Cancelar</button>
		</div>   
	</form>
		<div class="alert alert-info">Los campos marcados con * son obligatorios</div>

</body>
	
</html>
