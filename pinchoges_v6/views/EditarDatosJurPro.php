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
		<?PHP include(__DIR__."/../views/IU_cabecera.php"); ?>
	</div>
	<div class="row"></div>
	<div class="alert alert-info">Modifica los datos del miembro del Jurado Profesional seleccionado</div>		   
  
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
	<?PHP
		foreach  ($_SESSION['profesionales'] as $valor){
	
			if($valor['nombre_jurPro'] == $_SESSION['nombreJurPro']){
				?>
		
		<div class="form-group">
			<label for="name" class="label label-warning">Nuevo Nombre: </label>
			<input type="text" class="form-control" name="nombreJurPro" placeholder="Nombre del Jurado Profesional" VALUE="<?PHP echo $valor['nombre_jurPro']?>">
		</div>		
		
		<div class="form-group">
			<label for="name" class="label label-warning">Nueva Contrase&ntilde;a: </label>
			<input type="password" class="form-control" name="passJurPro" placeholder="Contrase&ntilde;a del Jurado Profesional" VALUE="<?PHP echo $valor['contrasenha_jurPro']?>">
		</div>	

		<div class="form-group">
			<label for="name">Nueva Profesi&oacute;n: </label>
			<input type="text" class="form-control" name="profJurPro" placeholder="Profesi&oacute;n del Jurado Profesional" VALUE="<?PHP echo $valor['profesion']?>">
		</div>	

		<div class="form-group">
			<label for="name">Nueva Cach&eacute;: </label>
			<input type="text" class="form-control" name="cachJurPro" placeholder="Cach&eacute; del Jurado Profesional" VALUE="<?PHP echo $valor['cache']?>">
		</div>		
			
			
					
			
				<?PHP
			}
		}						
		?>	
		
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="EditarFormularioJurPro" class="btn btn-default">Editar datos Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="EliminarJurPro" class="btn btn-default">Eliminar Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-default">Cancelar</button>
		</div>			

	<form/>
      
</body>

</html>

