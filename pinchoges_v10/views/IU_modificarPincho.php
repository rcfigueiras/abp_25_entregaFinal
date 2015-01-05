<?php
//session_start(); 
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
	
	<div class="col-xs-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	
	<div class="col-md-5"><!-- Ancho del cuerpo de la página -->

	<div class="panel panel-default">
	<div class="alert alert-info">Edite la informaci&oacute;n de su pincho. (Campos marcados con * son editables)</div>
	<div class="panel-body">	

	
	
	<form action="<?PHP echo raiz;?>controllers/establecimiento_controlador.php" method="post" enctype="multipart/form-data"> 
		
		<button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-block">
		<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
		Volver</button>
		
		<div class="form-group">
			<label for="name" class="label label-default">Nombre del pincho: </label>
			<input type="text" class="form-control" name="nombrePin" placeholder="<?PHP echo $_SESSION['nombre_pincho']?>" readonly>
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">*Foto: </label>
			<div class="form-group">
				<img src="<?PHP echo $_SESSION['foto']?>" alt="otraCosa" class="img-thumbnail" width='250'>
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">Tipo: </label>
			<input type="text" class="form-control" name="tipoPin" placeholder="<?PHP echo $_SESSION['tipo']?>" readonly>
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">Descripci&oacuten: </label>
			<input type="text" class="form-control" name="descPin" placeholder="<?PHP echo $_SESSION['descripcion']?>" readonly>
		</div>
		<div class="form-group">
			<label for="name" class="label label-default">Precio: </label>
			<input type="text" class="form-control" name="precioPin" placeholder="<?PHP echo $_SESSION['precio']?>" readonly>
		</div>			
		
		<div class="form-group">
			<label for="name" class="label label-default">*Horario: </label>
			<input type="text" class="form-control" name="horarioPin" placeholder="<?PHP echo $_SESSION['horario']?>" readonly>
		</div>
		<div class="form-group">
			<label for="name" class="label label-warning">Nueva Foto: </label>
			<input type="file" class="form-control" name="newfoto"  >
		</div>
		<div class="form-group">
			<label for="name" class="label label-warning">Nuevo Horario: </label>
			<select class="form-control" name="newhorario">
			  <option></option>
			  <option>almuerzo</option>
			  <option>cena</option>
			  <option>almuerzo/cena</option>
			</select>
		</div>

			<button TYPE="submit" name="accion" VALUE="EditarYa" class="btn btn-block">
			Editar</button>
			<button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			 Volver</button>		
	</form>
</body>

</html>



