<?php
session_start(); 
$login=$_SESSION['login'];
include(__DIR__."/../../var_globales.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


	<head>

	</head>

<body>
              
	<div class="alert alert-danger">No ha sido posible acceder a la información del sistema</div>
    
	
	<?PHP include(__DIR__."/../../controllers/administrador_controlador.php"); ?>

	
</body>

</html>



