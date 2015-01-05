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
    
    <div class="col-md-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
    <div class="col-md-8"><!-- Ancho del cuerpo de la página -->

	
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 	
    
    <div class="panel panel-default">
	<div class="panel-heading">
	  <h2 class="panel-title">
	            <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Gestionar Jurado Profesional.
	  </h2></div>
	<div class="alert alert-info">Miembros del Jurado Profesional.</div>	
	  <button TYPE="submit" name="accion" VALUE="VolverInicio" class="btn btn-block">          
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Volver
	  </button>
      <ul class="list-group">
		<?PHP
		foreach  ($_SESSION['profesionales'] as $valor){
		?>
		
		<li class="list-group-item">

		  <div class="form-group">
		  		
		  <div class="col-md-10"><!-- Separación entre los dos botones-->
		  
		  <div class="col-md-3"><!-- Separación entre los dos botones-->
		    <button class="btn btn-primary disabled" type="button" > 
		    <?PHP echo $valor['nombre_jurPro']?>
		    </button>
		  </div><!-- Separación entre los dos botones-->
		  
		  <div class="col-md-5"><!-- Separación entre los dos botones-->		  
		    <label for="name" class="label label-info">Profesi&oacute;n</label>
		    <label for="name"> <?PHP if ($valor['profesion'] == NULL){
					      echo "Desconocida"; 
					      } 
					      else {echo $valor['profesion'];} 	?> </label>
		  </div><!-- Separación entre los dos botones-->
		  
		  <div class="col-md-3"><!-- Separación entre los dos botones-->
		    <label for="name" class="label label-info">Cach&eacute;</label>
		    <label for="name"> <?PHP if ($valor['cache'] == NULL){
					      echo "---"; 
					      } 
					      else {echo $valor['cache'];} ?> 
					      <span class="glyphicon glyphicon-euro" aria-hidden="true"></span></label>
	  
		  </div><!-- Fin Separación entre los dos botones-->
		  </div><!-- Fin Separación entre los dos botones-->

		    <button TYPE="submit" NAME="editarJurPro" VALUE="<?PHP echo $valor['nombre_jurPro']?>" class="btn btn-primary">
		      Editar
		    </button>	  
		  </div>
		  </li>
		
		<?PHP				
		}		
		?>						
	  <button TYPE="submit" name="accion" VALUE="NuevoJurPro" class="btn btn-block">
	  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
	  Nuevo Jurado Profesional</button>
	  <button TYPE="submit" name="accion" VALUE="VolverInicio" class="btn btn-block">          
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 
	  Volver
	  </button>	<form/> 
	
  
</body>

</html>



