<?php
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}else{
	$login=$_SESSION['login'];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

</head>

<body>
	<div class="alert alert-success">Informaci&oacute;n del sistema insertada correctamente</div>
	
 		<?PHP include(__DIR__."/../../controllers/administrador_controlador.php"); //Cargamos el controlador del administrador que a su 
																					//vez carga el inicio del adminitrador
		?>


<body>

</html>

