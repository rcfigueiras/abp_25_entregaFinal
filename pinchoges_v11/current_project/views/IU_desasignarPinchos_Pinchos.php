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
	  	<!-- Información del jurado profesinal al que se asignan los pinchos y
		número de pinchos asignados actualizado -->
		  <div class="alert alert-info">Pinchos de "<?PHP echo $_SESSION['nombreJurado'] ?>". Pulse desvincular.</div>	
		   
      <ul class="list-group">


	
	<!-- Si un pincho se ha desvinculado de un Jurado profesional se muestra -->

	<?PHP if ($_SESSION['exito_desvinculacion'] == 1){
	?>
	
		<div class="alert alert-success">
	
	  <?PHP echo "El jurado '".$_SESSION['nombreJurado']."' ha sido desvinculado de '".$_SESSION['nombrePincho']."'"?>
	  
	</div>
	
	<?PHP } ?>

	<?PHP if ($_SESSION['num_pin']['num_pin'] == 0){
	?>
	
	<div class="alert alert-warning">
	 
	"<?PHP echo $_SESSION['nombreJurado']?>" 
	no tiene m&aacute;s pinchos asignados.
	
	</div>

	<?PHP } ?>
	<button TYPE="submit" name="accion" VALUE="VolverDesasigna_Jurado" class="btn btn-block">          
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Volver
	</button>
	<form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get">

		<?PHP
		
		/*Se muestran a continuación los jurados que tienen ya algn pincho asignado*/
		if($_SESSION['num_pin']['num_pin'] > 0){
		foreach  ($_SESSION['listaPin'] as $valor){
		?>
		<li class="list-group-item">
		<div class="col-md-2"></div><!-- Desplazamiento lateral de los botones-->

		<div class="form-group">
		<div class="col-md-5"><!-- Desplazamiento lateral de los botones-->
		  <button class="btn btn-primary disabled" type="button" > 
		    <?PHP echo $valor['nombre_pincho']?>		    
		 </button>
		 </div>
			<button TYPE="submit" NAME="desasignaPincho" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-default">
			Desvincular
			</button>
		</div>
		</li>
		<?PHP				
		}
		}
		?>			
	<form/> 

    </div>
	
  
</body>

</html>



