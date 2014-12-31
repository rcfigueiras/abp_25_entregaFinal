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
	<div class="alert alert-warning">No tiene pinchos asignados para valorar,
	p&oacute;ngase en contacto con el administrador</div>
	
	
	
	<?PHP include(__DIR__."/../../controllers/jurPro_controlador.php"); ?>
</body>

</html>



