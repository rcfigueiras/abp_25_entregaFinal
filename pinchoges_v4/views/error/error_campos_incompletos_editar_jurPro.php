<?php
session_start(); 
/*ruteado*/
//file:views/error/error_campos_incompletos_info.php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>

</head>

<body>
 
	<div class="alert alert-danger">Debe rellenar todos los campos resaltados</div>	         
    
	<div class="form-group">
	
		<?PHP include(__DIR__."/../EditarDatosJurPro.php"); ?>
		
	</div>
</body>

</html>
