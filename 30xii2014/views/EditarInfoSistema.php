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
	<div class="alert alert-info">Edite la informaci&oacute;n del sistema</div>		   
  
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="post" enctype="multipart/form-data"> 
		
		<div class="form-group">
			<label for="name" class="label label-default">Nuevo Nombre del concurso: </label>
			<input type="text" class="form-control" name="nombreConcNew" placeholder="nuevo nombre del concurso">
		</div>
				   
                
		<div class="form-group">
			<label for="name" class="label label-default">Nuevas Bases: </label>
			<input type="file" class="form-control" name="basesConcNew"  >
		</div>
			
		
		<div class="form-group">
			<label for="name" class="label label-default" >Antiguo Logotipo: </label>

			<div class="form-group">
				<img src="<?PHP echo $_SESSION['logotipo']?>" alt="no hay logotipo disponible" class="img-thumbnail" width='250'>
			</div>
			<label for="name" class="label label-default">Nuevo Logotipo: </label>
			<input type="file" class="form-control" name="logoConcNew">

		</div>
			
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="Editar" class="btn btn-default">Editar Informaci&oacute;n del Concurso</button>
			<button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-default">Cancelar</button>
		</div>	
			

	<form/>
      
</body>

</html>
