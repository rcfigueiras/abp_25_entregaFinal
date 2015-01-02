<?php
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}else{
	$login=$_SESSION['login'];
	$_REQUEST['accion'] = "VolverGesPincho";

	include(__DIR__."/../../controllers/administrador_controlador.php"); 
}
	
?>