<?php
session_start(); 
/*ruteado*/
//file:views/error/error_edita_pincho_vacio.php
include(__DIR__."/../../var_globales.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>

</head>

<body>
	
	<div class="alert alert-danger">No ha modifcado ning&uacute;n campo.</div>

	<?PHP include(__DIR__."/../IU_modificarPincho.php")?>
	
</body>

</html>



