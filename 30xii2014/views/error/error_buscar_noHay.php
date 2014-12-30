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
	
	<div class="row">
	</div>
	<div class="alert alert-info">No se encuentra ningun pincho con esos criterios de b&uacutesqueda</div>	

	<form action="<?PHP echo raiz;?>controllers/buscar_controlador.php" method="get">
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="volver" class="btn btn-default">Volver</button>			
		</div>					
	<form/>   
      
   
</body>

</html>



