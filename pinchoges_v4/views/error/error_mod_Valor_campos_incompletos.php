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
	NOTA y COMENTARIO, para poder modificar la valoraci&oacuten.</div>
    
	
	<?PHP include(__DIR__."/../IU_valorarPinchoYaValorado_formulario.php"); ?>

	
</body>

</html>



