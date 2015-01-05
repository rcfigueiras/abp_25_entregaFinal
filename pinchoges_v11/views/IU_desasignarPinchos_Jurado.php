<?php
session_start(); 
$login=$_SESSION['login'];

require_once(__DIR__."/../models/db_model.php");
include(__DIR__."/../var_globales.php");

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
    <div class="col-md-6"><!-- Ancho del cuerpo de la página -->

    <form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get"> 		
	<div class="panel panel-default">
	<div class="panel-heading">
	  <h2 class="panel-title">
	            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Desasignar Pinchos
	  </h2></div>
		  <div class="alert alert-info">Seleccione un Jurado Profesional para desasignar Pinchos.</div>	
		   <button TYPE="submit" name="accion" VALUE="VolverGesPincho" class="btn btn-block">          
		    <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver
		    </button>
      <ul class="list-group">

		<?PHP
		/*Se muestran a continuación los jurados que tienen ya algn pincho asignado*/
		foreach  ($_SESSION['listaJur'] as $valor){
		?>
		<li class="list-group-item">
		    <div class="col-md-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->

		<div class="form-group">
		<div class="col-md-4"><!-- Desplazamiento lateral de los botones-->

		  <button class="btn btn-primary disabled" type="button" > 
		      <?PHP echo $valor['nombre_jurPro']?>
		      <span class="badge">
			<?PHP echo $valor['numPin'];?>
		      </span>
		 </button>
		 
		</div><!-- Fin del desplazamiento lateral de los botones-->

		<button TYPE="submit" NAME="desasignaJurado" VALUE="<?PHP echo $valor['nombre_jurPro']?>" class="btn btn-default">
		Desasignar pincho
		</button>
		</div><!-- Fin del form-group-->
		</li>
		<?PHP				
		}			
		?>	
	    </ul>			
	  </div>  	
	</div>  	
      <form/> 	
  
</body>

</html>



