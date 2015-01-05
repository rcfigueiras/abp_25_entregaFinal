<?php
/*enrutado*/
session_start(); 
/***Conectamos con la base de datos****/
require_once(__DIR__."/../db/db.php");
require_once(__DIR__."/../var_globales.php");
$db= new Conectar();
$db->conexion();

/*****RECOJEMOS VARIABLES DEL FORMULARIO*****************/
if (isset($_REQUEST['accion'])) {
	$accion=$_REQUEST['accion'];
} else {
	//$accion='';
}

/*Comprobamos si el estableciento ha rellenado
el formulario de algún pincho*/
$login=$_SESSION['login'];
$sql="	SELECT * 
	FROM establecimiento E,pincho P
	WHERE E.ID_estab=P.ID_estab 
	AND E.nombre_estab = '".$login."'";

$resultado=mysql_query($sql);

if(mysql_fetch_row($resultado) > 0)
{
	$_SESSION['tiene_pincho']=1;
}else{
	$_SESSION['tiene_pincho']=0;
}

//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();

/*--------------------------------------------------------*/
/*LOGOUT***************************************************/
if($accion == "Logout"){
	session_destroy();
	header ('Location:'.raiz.'index.php');
}
/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*MODIFICAR PINCHO****************************************/
if($accion == "ModificarPincho")
{
	$db_model->editarPincho();

	if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_edita_pincho_sql.php');
	}else{
		header ('Location:'.raiz.'views/IU_modificarPincho.php');
	}
	
}
/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*EDITAR PINCHO*******************************************/
if ($accion == "EditarYa")
{

	if (($_FILES['newfoto']['name'] == '') 
		&& ($_REQUEST['newhorario'] == '')){
		
		header ('Location:'.raiz.'views/error/error_edita_pincho_vacio.php');
	
	}else{			
		$db_model->editarFormulario();
		if ($_SESSION['errorSQL']){
			header ('Location:'.raiz.'views/error/error_edita_pincho_no_valido.php');
		}else{
			header ('Location:'.raiz.'views/exito/exito_edicion.php');
		}	
	}	
} 
/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*RELLENAR FORMULARIO DE PINCHO***************************/
if($accion == "RellenarFormulario"){

	header ('Location:'.raiz.'views/IU_formularioPincho.php');

}
/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*ENVIAR FORMULARIO DE PINCHO*****************************/
 if($accion == "EnviarFormulario"){		

	$db_model->enviarFormulario();	
	
	//Validamos la consulta SQL
	if($_SESSION['campos_incompletos']){
		header ("Location:".raiz."views/error/error_campos_incompletos_formPincho.php"); 
	}else if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_inserta_formulario.php');
	}else{		
		header ('Location:'.raiz.'views/exito/exito_insercion_form.php');			
	}	
} 
/*-------------------------------------------------------*/
//Llamada a la vista
require_once(__DIR__."/../views/IU_inicio_establecimiento.php");
?>

