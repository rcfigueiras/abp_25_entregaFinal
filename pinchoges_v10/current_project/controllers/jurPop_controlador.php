<?php
/*enrutado*/
//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
require_once(__DIR__."/../var_globales.php");
/*****RECOJEMOS VARIABLES DEL FORMULARIO*****************/
if (isset($_REQUEST['accion'])) {
	$accion=$_REQUEST['accion'];
}
//Metemos el login en una variable de sesión
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}
//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();


//Llamada a la vista
require_once(__DIR__."/../views/IU_inicio_jurPop.php");

?>

