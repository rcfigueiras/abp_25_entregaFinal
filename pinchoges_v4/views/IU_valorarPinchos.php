<?php
/*enrutado*/
session_start(); 
$login=$_SESSION['login'];

require_once(__DIR__."/../var_globales.php");
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
		<?PHP include(__DIR__."/IU_cabecera.php"); ?>
	</div>
    <form action="<?PHP echo raiz;?>controllers/jurPro_controlador.php" method="get"> 

		<?PHP
		foreach  ($_SESSION['pinchos'] as $valor){
		?>		
		<div class="form-group">
			<label for="name" class="label label-default"> Nombre del pincho</label>
			<label for="name"> <?PHP echo $valor['nombre_pincho']?> </label>
		<div class="form-group">
			<img src="<?PHP echo $valor['foto']?>" alt="no hay imagen disponible" class="img-thumbnail" width='100'>			

			<label for="name" class="label label-default"> Tipo de pincho</label>
			<label for="name"> <?PHP echo $valor['tipo']?> </label>
		
			<label for="name" class="badge"> Establecimiento que lo ofrece</label>
			<label for="name"> <?PHP echo $valor['nombre_estab']?> </label>
			<label for="name" class="badge""> Direcci&oacute;n </label>
			<label for="name"> <?PHP echo $valor['direccion']?> </label>
			
			<button TYPE="submit" NAME="valorarEste" VALUE="<?PHP echo $valor['nombre_pincho']?>" align=right class="btn btn-default">Valorar</button>

		</div>
		</div>
		<?PHP
		}
		?>
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="Volver" class="btn btn-default">Volver</button>
		</div>  				
	<form/>  
</body>

</html>



