<?php
session_start(); 
include(__DIR__."/../../var_globales.php");
/*enrutado*/
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>
 </head>

<body>
	
	<!-- Cabecera -->
		<?PHP include(__DIR__."/../IU_cabecera.php"); ?>
	  
	<div class="col-md-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	
	<div class="col-md-5"><!-- Ancho del cuerpo de la página -->
	

	<form action="<?PHP echo raiz;?>controllers/buscar_controlador.php" method="get">
	<?PHP
	
		foreach ($_SESSION['buscar'] as $valor){
		?>
		
	      <div class="panel panel-default">
	      <div class="panel-heading">
		<h2 class="panel-title">Informaci&oacute;n ampliada</h2>
	      </div>
	      
	      <div class="panel-body">
	      
		<div class="form-group">
		  <img src="<?PHP echo $valor['foto']?>" alt="No hay imagen disponible" class="img-thumbnail" width='400'>
		</div>

		<div class="form-group">
		  <label class="label label-info">Nombre</label>
		  <h4><?PHP echo $valor['nombre_pincho']?></h4>
			
		</div>

		<div class="form-group">
		  <label class="label label-info">Tipo</label>
		  <h4><?PHP echo $valor['tipo']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Descripci&oacute;n</label>
		  <h4><?PHP echo $valor['descripcion']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Precio</label>
		  <h4><?PHP echo $valor['precio']?><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Horario</label>
		  <h4><?PHP echo $valor['horario']?></h4>
		</div>
		
		<div >
		  <label class="label label-info">Establecimiento</label>
		  <h4><?PHP echo $valor['nombre_estab']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Direcci&oacute;n</label>
		  <h4><?PHP echo $valor['direccion']?></h4>
		</div>
		
		
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="volver2" class="btn btn-primary">Volver</button>
			
		</div>		      
		
		</div>
		
		<?PHP				
		}		
		?>						
		
		</div>
		
	<form/> 
	
	
	

      
   
</body>

</html>



