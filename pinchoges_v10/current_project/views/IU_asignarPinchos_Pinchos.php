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
	            <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span> 
	            Asignar Pinchos a <?PHP echo $_SESSION['nombreJurado'] ?>
	  </h2>
	</div>
      <!-- Información del jurado profesinal al que se asignan los pinchos y
      número de pinchos asignados actualizado -->
      <div class="alert alert-info">
	<?PHP echo $_SESSION['nombreJurado'] ?> tiene 
	<span class="badge">
	  <?PHP echo $_SESSION['num_pinchos']['num_pinchos'];?>
	</span> asignados. Pulse asignar.</div>	
		   
      <ul class="list-group">

	
	<!-- Si se ha asignado un pincho con un jurado se muestra un mensaje de éxito -->

	<?PHP if ($_SESSION['exito_vinculo'] == 1){
	?>
	
		<div class="alert alert-success">
	
	  <?PHP echo "El jurado '".$_SESSION['nombreJurado']."' ha sido asignado a '".$_SESSION['nombrePincho']."'"?>
	  
	</div>
	
	<?PHP } ?>

	<!-- Si se ha cubierto el cupo de pinchos de este jurado se muestra un mensaje 
	informando al administrador.-->
	<!-- Se desactivan en consecuencia los botones de vinculación -->

	
	<?PHP if ($_SESSION['cupo_completo'] == 1){
	?>
	
	<div class="alert alert-warning">
	
	El cupo de asignaciones de 
	"<?PHP echo $_SESSION['nombreJurado']?>" 
	est&aacute; completo, por favor, elimine alguna asignaci&oacute;n para vincular un nuevo 
	pincho con "<?PHP echo $_SESSION['nombreJurado']?>".
	
	</div>
	
	<!-- El siguiente mensaje se muestra cuando son necesarias nuevas validaciones de pinchos
	para que sea posible continuar con las asignaciones  .-->	
	<?PHP } elseif ($_SESSION['hayPin_asignar'] == 0){
	?>
	
		<div class="alert alert-warning">Valide nuevos Pinchos para continuar con las asignaciones, por favor.</div>

	<?PHP	
	}
	?>
		<button TYPE="submit" name="accion" VALUE="VolverAsigna_Jurado" class="btn btn-block">          
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Volver
	</button>
	<form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get"> 		
		


		<?PHP
		
		/*Se muestran a continuación los pinchos y su número de Jurados asignados*/
		if($_SESSION['hayPin_asignar'] == 1){
		foreach  ($_SESSION['listaPin'] as $valor){
		?>
		
		<li class="list-group-item">
		<div class="col-md-2"></div><!-- Desplazamiento lateral de los botones-->

		<div class="form-group">
		<div class="col-md-5">
		  <button class="btn btn-primary disabled" type="button" > 
		    <?PHP echo $valor['nombre_pincho']?>
		    <span class="badge">
		      <?PHP echo $valor['numJP'];?>
		    </span>
		 </button>
		 </div>
		
		<button TYPE="submit" NAME="asignaPincho" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-default"
		  <?PHP if ($_SESSION['cupo_completo'] == 1 ){ ?> disabled="disabled" <?PHP } ?>>
		  Vincular
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



