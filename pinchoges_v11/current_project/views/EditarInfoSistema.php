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
	<div class="col-xs-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	
	<div class="col-md-5"><!-- Ancho del cuerpo de la página -->

	<div class="panel panel-default">
	<div class="alert alert-info">Edite la informaci&oacute;n del sistema</div>
	<div class="panel-body">	
	<form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="post" enctype="multipart/form-data"> 
	
	    <div class="form-group">
	      <label for="name" class="label label-default">Nuevo Nombre del concurso: </label>
	      <input type="text" class="form-control" name="nombreConcNew" placeholder="Introduzca nuevo nombre del concurso">
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
		    
	      <button TYPE="submit" name="accion" VALUE="Editar" class="btn btn-block">
	      <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
	       Editar Informaci&oacute;n del Concurso</button>
	      <button TYPE="submit" name="accion" VALUE="Cancelar" class="btn btn-block">
	      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	       Volver</button>
			

	<form/>  
	
	</div>

	</div>
		   
  
    
      </div>
</body>

</html>
