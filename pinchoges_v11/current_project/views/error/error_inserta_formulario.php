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
	<div class="alert alert-danger">Hemos tenido problemas para procesar su solicitud</div>
	<!-- Cabecera -->

	<?PHP include(__DIR__."/../IU_inicio_establecimiento.php"); ?>
</body>

</html>



