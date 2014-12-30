<?php
session_start(); 
$login=$_SESSION['login'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


	<head>

	</head>

<body>
              
	<div class="alert alert-danger">Debe rellenar los campos 
	NOTA y COMENTARIO, para poder introducir la valoraci&oacute;n.</div>
    
	
	<?PHP include(__DIR__."/../IU_valorarPincho_formulario.php"); ?>

	
</body>

</html>



