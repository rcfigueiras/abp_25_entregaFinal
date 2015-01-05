<?PHP
/*ruteado*/
include(__DIR__."/../../var_globales.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

  </head>

<body>
 
	<!-- Cabecera -->
	<div class="form-group">
		<?PHP include(__DIR__."/../IU_cabecera.php"); ?>
	</div> 
		
	<div class="col-md-4"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	
	<div class="col-md-5"><!-- Ancho del cuerpo de la página -->

	
	<div class="alert alert-info">No se encuentra ningun pincho con esos criterios de b&uacutesqueda</div>	

	<form action="<?PHP echo raiz;?>controllers/buscar_controlador.php" method="get">
		

		<button TYPE="submit" name="accion" VALUE="volver" class="btn btn-block">
		<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"> 
		Volver</button>			
	<form/>   
      
	</div>
</body>

</html>



