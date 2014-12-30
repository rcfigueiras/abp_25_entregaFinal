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
	  <div class="panel-body">
	    Tiene <?PHP echo $_SESSION['num_pinchos']['num_pinchos']." pinchos asignados.<br>"?>
	  </div>
	</div>	
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
	
	<form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get"> 		
		


		<?PHP
		
		/*Se muestran a continuación los pinchos y su número de Jurados asignados*/
		if($_SESSION['hayPin_asignar'] == 1){
		foreach  ($_SESSION['listaPin'] as $valor){
		?>
		<div class="form-group">
		  <button class="btn btn-primary disabled" type="button" > 
		    <?PHP echo $valor['nombre_pincho']?>
		    <span class="badge">
		      <?PHP echo $valor['numJP'];?>
		    </span>
		 </button>
			<button TYPE="submit" NAME="asignaPincho" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-default"
			<?PHP if ($_SESSION['cupo_completo'] == 1 ){ ?> disabled="disabled" <?PHP } ?>>Vincular</button>
		</div>
		<?PHP	
		}	
		}		
		?>	
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="VolverAsigna_Jurado" class="btn btn-default">Volver</button>
		</div>  		
	<form/> 
	
  
</body>

</html>



