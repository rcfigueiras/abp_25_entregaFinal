<?php
session_start(); 
//file:views/RellenarDatosJurPro.php
/*ruteado*/
include(__DIR__."/../var_globales.php")
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
	<div class="alert alert-info">A&ntilde;ada un nuevo miembro del Jurado Profesional (los campos resaltados son obligatorios)</div>		   
    <div class="panel-body">	
      <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="post" enctype="multipart/form-data"> 
		
		<div class="form-group">
			<label for="name" class="label label-warning">Nombre: </label>
			<input type="text" class="form-control" name="nombreJurPro" placeholder="Nombre del Jurado Profesional" >
		</div>		
		
		<div class="form-group">
			<label for="name" class="label label-warning">Contrase&ntilde;a: </label>
			<input type="password" class="form-control" name="passJurPro" placeholder="Contrase&ntilde;a del Jurado Profesional" >
		</div>	

		<div class="form-group">
			<label for="name" class="label label-default">Profesi&oacute;n: </label>
			<input type="text" class="form-control" name="profJurPro" placeholder="Profesi&oacute;n del Jurado Profesional" >
		</div>	

		<div class="form-group">
			<label for="name" class="label label-default">Cach&eacute;: </label>
			<input type="text" class="form-control" name="cachJurPro" placeholder="Cach&eacute; del Jurado Profesional" >
		</div>			

		
		<button TYPE="submit" name="accion" VALUE="EnviarFormularioJurPro" class="btn btn-block">
		<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>A&ntilde;adir Nuevo Jurado Profesional</button>
		<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-block">
		<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Cancelar</button>
				
		
	<form/>
	
	</div>

	</div>
		   
	</div>
  
</body>

</html>
