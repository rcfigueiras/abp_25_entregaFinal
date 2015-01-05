<?php
session_start();
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
$db_model->checkAsignacionesPro();
/*--------------------------------------------------------*/
/*VALORAR PINCHOS*****************************************/
if($accion == "valorarPinchos"){
	$db_model->valorarPinchos();
	if($_SESSION['errorSQL_no_tiene']){		

		header('Location:'.raiz.'controllers/jurPro_controlador.php');
	
	}else{
		header('Location:'.raiz.'views/IU_valorarPinchos.php');
	}
}

/*--------------------------------------------------------*/
/*MOSTRAR TODA LA INFO DEL PINCHO A VALORAR****************/
if(isset($_REQUEST['valorarEste'])){
	
	$_SESSION['nombrePin']=$_REQUEST['valorarEste'];
	//$_SESSION['nombrePin']=$nombrePin;
	$db_model->comprobarValoracion();
	
	if ($_SESSION['yaValorado']){
		header ('Location:'.raiz.'views/IU_valorarPinchoYaValorado_formulario.php');
	}else{
		
		header ('Location:'.raiz.'views/IU_valorarPincho_formulario.php');
	}
}
/*--------------------------------------------------------*/
/*VALORA YA ESTE PINCHO ***********************************/
if($accion == "valoraYa"){
	//Recogemos variables del formulario
	if(isset($_REQUEST['nota'])){
		$nota=$_REQUEST['nota'];
		$_SESSION['nota']=$nota;
	}
	
	if(isset($_REQUEST['comentario'])){
		$comentario=$_REQUEST['comentario'];
		$_SESSION['comentario']=$comentario;
	}
	
	if($nota == NULL || $comentario == NULL){
	  header ('Location:'.raiz.'views/error/error_mod_Valor_campos_incompletos2.php');
	}else{
	    $db_model->valoraYaPincho();
	    if($_SESSION['errorSQL']){
			    header ('Location:'.raiz.'views/error/error_valida_pincho_sql.php');

	    }else{		
		    if($_SESSION['errorSQL']){
			    echo "el pincho no se valora";
		    }else{			
			    header ('Location:'.raiz.'views/IU_valorarPinchos.php');
		    }			
	    }
	
	}
}

/*MODIFICA VALORACIÓN ***********************/
if($accion == "modificaValoracion"){
	if(isset($_REQUEST['newNota'])){
		$nota=$_REQUEST['newNota'];
		$_SESSION['newNota']=$nota;
	}
	
	if(isset($_REQUEST['newComentario'])){
		$comentario=$_REQUEST['newComentario'];
		$_SESSION['newComentario']=$comentario;
	}
	
	if($nota == NULL || $comentario == NULL){
	  header ('Location:'.raiz.'views/error/error_mod_Valor_campos_incompletos.php');
	}else{
	  $db_model->modificaValoracionPincho();
	  if($_SESSION['errorSQL']){
			  header ('Location:'.raiz.'views/error/error_valora_pincho_sql.php');

	  }else{
		  //Volvemos a mostrar el inicio de valorar pinchos
		  $db_model->valorarPinchos();	
		  
		  if($_SESSION['errorSQL']){
			  echo "No hay pinchos que valorar en el sistema";
		  }else{			
			  header ('Location:'.raiz.'views/IU_valorarPinchos.php');
		  }		
	  }
	}
	
}
/*--------------------------------------------------------*/
/*VOLVER***************************************************/
if($accion == "Volver"){
	header ('Location:'.raiz.'views/IU_inicio_jurPro.php');
}
/*--------------------------------------------------------*/
/*VOLVER LISTA VALORACION**********************************/
if($accion == "Volver_listaValorar"){
	header ('Location:'.raiz.'views/IU_valorarPinchos.php');
}

//Llamada a la vista
require_once(__DIR__."/../views/IU_inicio_jurPro.php");

?>

