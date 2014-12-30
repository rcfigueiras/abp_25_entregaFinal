<?php
session_start(); 
//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();

/*Recogemos variables de la interfaz*/
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login'] = $login;
}

if (isset($_REQUEST['pass'])) {
	$pass=$_REQUEST['pass'];
	$_SESSION['pass'] = $pass;

	} 

if (isset($_REQUEST['accion'])) {
	$accion=$_REQUEST['accion'];
	$_SESSION['accion'] = $accion;

	} 

/**********************************/
/*Loguear**************************/
if($accion == "Loguear"){		

	$db_model->loguear_invitado();

}
	
if($accion == "volver"){

	header ('Location:'.__DIR__.'/../controllers/login_controlador.php');
	
}


//Llamada a la vista
require_once(__DIR__."/../views/IU_login.php");
?>
