<?php
session_start(); 
$login=$_SESSION['login'];

require_once(__DIR__."/../models/db_model.php");
require_once(__DIR__."/../var_globales.php");
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
    <div class="col-md-5"><!-- Ancho del cuerpo de la página -->

    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
<div class="panel panel-default">
	<div class="panel-heading">
	  <h2 class="panel-title">
				<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
				 Informaci&oacute;n completa del pincho que desea validar
	  </h2></div>
	<div class="alert alert-warning">Pulse validar para completar la acci&oacute;n</div>
	<div>
	<button TYPE="submit" name="accion" VALUE="VolverListaValidar" class="btn btn-block">         
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	  Volver al listado
	</button>
	</div>
	  <div class="panel-body">
	<?PHP
		foreach  ($_SESSION['pinchos'] as $valor){
	
			if($valor['nombre_pincho'] == $_SESSION['nombrePin']){
				?>
					
			<div class="form-group">
		  <img src="<?PHP echo $valor['foto']?>" alt="No hay imagen disponible" class="img-thumbnail" width='350'>
		</div>

		<div class="form-group" name="nombre_pincho">
		  <label class="label label-info">Nombre</label>
		  <h4 NAME="nombrePin" VALUE="<?PHP echo $valor['nombre_pincho']?>"><?PHP echo $valor['nombre_pincho']?></h4>			
		  <input  TYPE="hidden" NAME="nombrePin" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-default" readonly ></input>
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
				<?PHP
			}
		}						
		?>	
		
	  <button TYPE="submit" name="accion" VALUE="altaPincho" class="btn btn-block">
	  <span class="glyphicon glyphicon-ok" aria-hidden="true"> Validar
	  </button>
	  <button TYPE="submit" name="accion" VALUE="VolverListaValidar" class="btn btn-block">         
	  <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	  Volver al listado
	</button>

	<form/>
</body>

</html>



