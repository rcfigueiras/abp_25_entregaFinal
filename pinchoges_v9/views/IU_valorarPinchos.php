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
	<?PHP include(__DIR__."/IU_cabecera.php"); ?>

    <form action="<?PHP echo raiz;?>controllers/jurPro_controlador.php" method="get"> 
	<div class="col-md-2"></div>
	<div class="col-md-8"><!-- Ancho del cuerpo de la página -->
	<div class="alert alert-info">Seleccione un pincho para Valorarlo.</div>
	<div class="row">
		  <div class="col-md-12">
		    <button TYPE="submit" name="accion" VALUE="volver" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver</button>
		  </div>
		</div>	
		<?PHP
		foreach  ($_SESSION['pinchos'] as $valor){
		?>	
		<div class="col-sm-8 col-md-4">
	    <div class="thumbnail">
	      <img src="<?PHP echo $valor['foto']?>" alt="No hay imagen disponible" width="250">
	      <div class="caption">
			<h3><?PHP echo $valor['nombre_pincho']?></h3>
		
		    <p>
		    <label for="name" class="badge"> Tipo</label>
		    <label> <?PHP echo $valor['tipo']?> </label>
		    </p>
		    
		    <p>
		    <label for="name" class="badge"> Establecimiento</label>
		    <label for="name"> <?PHP echo $valor['nombre_estab']?> </label>
		    </p>
		    
		<p>
			<button TYPE="submit" NAME="valorarEste" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-primary">
				<span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span> Valorar
			</button>
		</p>
	      </div>
	    </div>
	  </div>
		
		<?PHP
		}
		?>
				
	<form/>  
</body>

</html>



