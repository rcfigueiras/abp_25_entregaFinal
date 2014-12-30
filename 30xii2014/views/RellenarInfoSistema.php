<?php
session_start(); 
//file:views/RellenarInfoSistema.php
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
	<div class="alert alert-info">A&ntilde;ada la informaci&oacuten del sistema</div>		   
                
      <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="post" enctype="multipart/form-data"> 
		
		<div class="form-group">
			<label for="name">Nombre del concurso: </label>
			<input type="text" class="form-control" name="nombreConc" placeholder="nombre del concurso" >
		</div>		
		
		<div class="form-group">
			<label for="name">Bases: </label>
			<input type="file" class="form-control" name="basesConc" placeholder="bases del concurso" >
		</div>
			
		
		<div class="form-group">
			<label for="name">Logotipo: </label>
			<input type="file" class="form-control" name="logoConc" placeholder="logo del concurso" >
		</div>			

		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="EnviarFormularioSistema" class="btn btn-default">Enviar Formulario Sistema</button>
			<button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-default">Cancelar</button>
		</div>		
		
	<form/>
  
</body>

</html>
