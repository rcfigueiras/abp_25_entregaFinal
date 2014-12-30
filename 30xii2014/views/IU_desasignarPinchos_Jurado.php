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
	
    <form action="<?PHP echo raiz;?>/controllers/administrador_controlador.php" method="get"> 		
		
		<?PHP
		/*Se muestran a continuación los jurados que tienen ya algn pincho asignado*/
		foreach  ($_SESSION['listaJur'] as $valor){
		?>
		<div class="form-group">
		
		  <button class="btn btn-primary disabled" type="button" > 
		      <?PHP echo $valor['nombre_jurPro']?>
		      <span class="badge">
			<?PHP echo $valor['numPin'];?>
		      </span>
		 </button>
		 
		<button TYPE="submit" NAME="desasignaJurado" VALUE="<?PHP echo $valor['nombre_jurPro']?>" class="btn btn-default">Desasignar Pincho</button>
		
		</div>
		<?PHP				
		
		}		
		
		?>	
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="VolverInicio" class="btn btn-default">Volver</button>
		</div>  		
	<form/> 
	
  
</body>

</html>



