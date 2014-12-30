<?php
session_start(); 


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

</head>

<body>
	<div class="alert alert-warning">El cupo de asignaciones de 
	"<?PHP echo $_SESSION['nombreJurado']?>" 
	est&aacute; completo, por favor, elimine alguna asignaci&oacute;n para vincular un nuevo 
	pincho con "<?PHP echo $_SESSION['nombreJurado']?>".</div>
	
	
	
	<?PHP include(__DIR__."/../../controllers/administrador_controlador.php"); ?>
</body>

</html>



