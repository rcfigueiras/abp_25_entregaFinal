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
    <?PHP include(__DIR__."/../views/IU_cabecera.php"); ?>
  <div class="col-xs-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	<div class="col-md-5"><!-- Ancho del cuerpo de la página -->

	<div class="panel panel-default">
	<div class="alert alert-info">&#191;Seguro que desea eliminar al miembro del Jurado Profesional seleccionado?</div>		   

    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
      <button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-block">
      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
      Cancelar</button>
      <div class="panel-body"> 
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
		
			<button TYPE="submit" name="accion" VALUE="EliminarJurProConf" class="btn btn-block">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			Eliminar Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			 Cancelar</button>

	<form/>
      
</body>

</html>

