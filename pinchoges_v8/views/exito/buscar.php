<?php
session_start(); 
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

</head>

<body>
 	
	<!-- Cabecera -->
	<div class="form-group">
		<?PHP include("../IU_cabecera.php"); ?>
	</div>
		<form action="../../controllers/buscar_controlador.php" method="get">

	
	

	<div class="col-md-2"></div>
	<div class="col-md-8"><!-- Ancho del cuerpo de la página -->



	<div class="alert alert-info">Resultados de la b&uacute;squeda</div>
	<div class="row">
		  <div class="col-md-12">
		    <button TYPE="submit" name="accion" VALUE="volver" class="btn btn-block">
			<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Volver</button>
		  </div>
		</div>	
	<?PHP
	/*
	Si venimos de mostrar más info no actualizamos el valor 
	de la lista de pinchos a mostrar, conservamos el valor
	de la búsqueda
	
	*/
	if($_SESSION['flag'])
	{

		$_SESSION['listaBusqueda']=$_SESSION['buscar'];
	
	} ?>
	<div class="row"><!-- Aquí comienzan los Thumbnails -->

	<?PHP
	foreach ($_SESSION['listaBusqueda'] as $valor){
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
			<button TYPE="submit" NAME="masInfoPincho" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-primary">
				<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> M&aacute;s informaci&oacute;n
			</button>
		</p>
	      </div>
	    </div>
	  </div>
	
		<?PHP				
		}		
		
		?>						
		</div><!-- Fin del thumbnail -->	
		
	</div><!-- Fin del ancho del cuerpo de la página -->
	 
	<form/>   
   
   
</body>

</html>



