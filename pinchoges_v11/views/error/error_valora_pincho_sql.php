<?php
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}else{
	$login=$_SESSION['login'];
}

include(__DIR__."/../../var_globales.php");

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

</head>

<body>
	<div class="alert alert-danger">El pincho no se ha validado correctamente</div>
	
	<?PHP include(__DIR__."/../../controllers/administrador_controlador.php"); ?>

<body>

</html>



