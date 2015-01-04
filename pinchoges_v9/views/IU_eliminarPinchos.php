<?php
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
      <?PHP include("IU_cabecera.php"); ?>
    </div> 

    <div class="col-md-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
    <div class="col-md-6"><!-- Ancho del cuerpo de la página -->
    
    <form action="<?PHP echo raiz;?>controllers/administrador_controlador.php" method="get"> 
    <div class="panel panel-default">
	<div class="panel-heading">
	  <h2 class="panel-title">
	            <span class="glyphicon glyphicon-folder-close" aria-hidden="true"></span> Eliminar Pinchos
	  </h2></div>
	<?PHP 
	if(isset($_SESSION['exito_eliminar']))	{
		if($_SESSION['exito_eliminar'] == 1)
		{ 
		?>			
		<div class="alert alert-success">El pincho <?PHP echo $_SESSION['nombrePin'];?> ha sido eliminado</div>
		
		<?PHP
		}	
	}
	$_SESSION['exito_eliminar']=0;
	?>
	<div class="alert alert-warning">Seleccione un pincho para continuar con su eliminaci&oacute;n</div>
	      	    	    <button TYPE="submit" name="accion" VALUE="VolverGesPincho" class="btn btn-block">          
						<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>Volver
						</button>

	
      <ul class="list-group">

    	  <?PHP foreach  ($_SESSION['pinchos'] as $valor){ ?>	
	    <li class="list-group-item">
	  	  <div class="col-md-1"></div>

	  <div class="form-group">
	    <img src="<?PHP echo $valor['foto']?>" alt="no hay imagen disponible" class="img-thumbnail" width='225'>
	    <label class="label label-info"><?PHP echo $valor['nombre_pincho']?></label>
	  <div class="col-md-1">
	    <button TYPE="submit" NAME="eliminaEste" VALUE="<?PHP echo $valor['nombre_pincho']?>" class="btn btn-primary">
	      <span class="glyphicon glyphicon-floppy-remove" aria-hidden="true"></span> Eliminar
	    </button>

	 </div>
	 </div>
	    </li>
	  <?PHP } ?> 
      </ul>
    </div> 
	</form>
  </body>
  
</html>



