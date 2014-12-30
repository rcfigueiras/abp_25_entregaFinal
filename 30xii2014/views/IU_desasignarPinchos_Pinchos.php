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
	
	<div class="row"> </div>
	<!-- Información del jurado profesinal al que se asignan los pinchos y
	número de pinchos asignados actualizado -->

	  <div class="panel panel-default">
	  <div class="panel-heading"> <?PHP echo $_SESSION['nombreJurado'] ?></div>
	</div>	
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
	
	<form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get">

		<?PHP
		
		/*Se muestran a continuación los jurados que tienen ya algn pincho asignado*/
		if($_SESSION['num_pin']['num_pin'] > 0){
		foreach  ($_SESSION['listaPin'] as $valor){
		?>
		<div class="form-group">
		  <button class="btn btn-primary disabled" type="button" > 
		    <?PHP echo $valor['nombre_pincho']?>		    
		 </button>
			<button TYPE="submit" NAME="desasignaPincho" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-default">Desvincular</button>
		</div>
		<?PHP				
		}
		}
		?>	
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="VolverDesasigna_Jurado" class="btn btn-default">Volver</button>
		</div>  		
	<form/> 
	
  
</body>

</html>



