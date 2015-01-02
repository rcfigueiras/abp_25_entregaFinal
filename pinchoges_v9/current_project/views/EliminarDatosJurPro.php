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
	<div class="alert alert-info">&#191;Seguro que desea eliminar al miembro del Jurado Profesional seleccionado?</div>		   
  
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
	<?PHP
		foreach  ($_SESSION['profesionales'] as $valor){
	
			if($valor['nombre_jurPro'] == $_SESSION['nombreJurPro']){
				?>
		
		<div class="form-group">
			<label for="name" class="label label-warning">Nombre: </label>
			<input type="text" class="form-control" name="nombreJurPro" VALUE="<?PHP echo $valor['nombre_jurPro']?>" readonly>
		</div>		
		
		<div class="form-group">
			<label for="name" class="label label-warning">Contrase&ntilde;a: </label>
			<input type="password" class="form-control" name="passJurPro" VALUE="<?PHP echo $valor['contrasenha_jurPro']?>" readonly>
		</div>	

		<div class="form-group">
			<label for="name">Profesi&oacute;n: </label>
			<input type="text" class="form-control" name="profJurPro" VALUE="<?PHP echo $valor['profesion']?>" readonly>
		</div>	

		<div class="form-group">
			<label for="name">Cach&eacute;: </label>
			<input type="text" class="form-control" name="cachJurPro" VALUE="<?PHP echo $valor['cache']?>" readonly>
		</div>		
			
			
					
			
				<?PHP
			}
		}						
		?>	
		
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="EliminarJurProConf" class="btn btn-default">Eliminar Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-default">Cancelar</button>
		</div>			

	<form/>
      
</body>

</html>

