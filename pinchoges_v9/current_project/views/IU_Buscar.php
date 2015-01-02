<?php
session_start(); 
include(__DIR__."/../var_globales.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>

  </head>

<body>
		
	<form action="<?PHP echo raiz;?>controllers/buscar_controlador.php" method="get" role="form">
	<div class="row">
		
		<div class="col-md-4"></div>
		<div class="col-md-4">

		<div class="form-group">
			<input	TYPE="text"	CLASS="form-control"  NAME="search"  PLACEHOLDER="Introduzca su b&uacute;squeda">
			<button TYPE="submit"	CLASS="btn btn-block" NAME="accion"  VALUE="Buscar" >Buscar</button>

		</div>
		</div>
	</div>
	</form>      
   
</body>

</html>



