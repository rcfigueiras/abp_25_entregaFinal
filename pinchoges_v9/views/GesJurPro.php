<?php
session_start(); 
$login=$_SESSION['login'];

require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>

</head>

<body>
	<!-- Cabecera -->
	<div class="form-group">
		<?PHP include("IU_cabecera.php"); ?>
	</div>
	
	<div class="row"></div>
	<div class="alert alert-info">Miembros del Jurado Profesional</div>
	
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 		
		<?PHP
		foreach  ($_SESSION['profesionales'] as $valor){
		?>
		<div class="form-group">
					
			<label for="name" class="label label-default">Nombre</label>
			<label for="name"> <?PHP echo $valor['nombre_jurPro']?> </label>

			<label for="name" class="label label-default">Profesi&oacute;n</label>
			<label for="name"> <?PHP echo $valor['profesion']?> </label>

			<label for="name" class="label label-default">Cach&eacute;</label>
			<label for="name"> <?PHP echo $valor['cache']?> </label>
		

			<button TYPE="submit" NAME="editarJurPro" VALUE="<?PHP echo $valor['nombre_jurPro']?>" class="btn btn-default">Editar</button>

					
					
		</div>
		<?PHP				
		}		
		?>						
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="NuevoJurPro" class="btn btn-default">Nuevo Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverInicio" class="btn btn-default">Volver</button>
		</div>  		
	<form/> 
	
  
</body>

</html>



