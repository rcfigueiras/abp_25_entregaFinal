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

	<?PHP 
	if(isset($_SESSION['exito_validar']))	{
		if($_SESSION['exito_validar'] == 1)
		{ 
		?>			
		<div class="alert alert-success">El pincho <?PHP echo $_SESSION['nombrePin'];?> ha sido validado</div>
		
		<?PHP
		}	
	}
	$_SESSION['exito_validar'] = 0;
	?>
	<div class="alert alert-warning">No hay pinchos disponibles para validar</div>
	
	<?PHP include(__DIR__."/../IU_GesPinchos.php"); ?>

<body>

</html>



