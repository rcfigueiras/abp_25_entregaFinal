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
	<div class="alert alert-info">Modifica los datos del miembro del Jurado Profesional seleccionado</div>

    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
					<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			 Volver</button>
	<div class="panel-body">    
	
	<?PHP
		foreach  ($_SESSION['profesionales'] as $valor){
	
			if($valor['nombre_jurPro'] == $_SESSION['nombreJurPro']){
				?>
		
		<div class="form-group">
			<label for="name" class="label label-default">Nuevo Nombre</label>
			<input type="text" class="form-control" name="nombreJurPro" placeholder="Nombre del Jurado Profesional" VALUE="<?PHP echo $valor['nombre_jurPro']?>">
		</div>		
		
		<div class="form-group">
			<label for="name" class="label label-default">Nueva Contrase&ntilde;a</label>
			<input type="password" class="form-control" name="passJurPro" placeholder="Contrase&ntilde;a del Jurado Profesional" VALUE="<?PHP echo $valor['contrasenha_jurPro']?>">
		</div>	

		<div class="form-group" class="label label-default">
			<label for="name" class="label label-default">Nueva Profesi&oacute;n</label>
			<input type="text" class="form-control" name="profJurPro" placeholder="Profesi&oacute;n del Jurado Profesional" VALUE="<?PHP echo $valor['profesion']?>">
		</div>	

		<div class="form-group" >
			<label for="name" class="label label-default">Nueva Cach&eacute;</label>
			<input type="text" class="form-control" name="cachJurPro" placeholder="Cach&eacute; del Jurado Profesional" VALUE="<?PHP echo $valor['cache']?>">
		</div>		
			
			
					
			
				<?PHP
			}
		}						
		?>	
		
			<button TYPE="submit" name="accion" VALUE="EditarFormularioJurPro" class="btn btn-block">
			<span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
			Editar datos Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="EliminarJurPro" class="btn btn-block">
			<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
			 Eliminar Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
			 Volver</button>

	<form/>
	    </div>
	  </div>
	</div>
      
</body>

</html>

