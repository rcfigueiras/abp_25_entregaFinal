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
	
	<div class="row"></div>
	<div class="alert alert-info">A&ntilde;ada un nuevo miembro del Jurado Profesional (los campos resaltados son obligatorios)</div>		   
                
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
			<label for="name">Profesi&oacute;n: </label>
			<input type="text" class="form-control" name="profJurPro" placeholder="Profesi&oacute;n del Jurado Profesional" >
		</div>	

		<div class="form-group">
			<label for="name">Cach&eacute;: </label>
			<input type="text" class="form-control" name="cachJurPro" placeholder="Cach&eacute; del Jurado Profesional" >
		</div>			

		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="EnviarFormularioJurPro" class="btn btn-default">A&ntilde;adir Nuevo Jurado Profesional</button>
			<button TYPE="submit" name="accion" VALUE="VolverGesJurPro" class="btn btn-default">Cancelar</button>
		</div>		
		
	<form/>
  
</body>

</html>
