<?php

session_start(); 

	$_REQUEST['exito_desvinculacion']=1;
	$_REQUEST['asignaJurado'] = $_SESSION['nombreJurado'];
	include(__DIR__."/../../controllers/administrador_controlador.php"); 
?>



