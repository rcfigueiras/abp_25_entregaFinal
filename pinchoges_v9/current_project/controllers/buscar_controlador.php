<?php
session_start(); 
/*enrutado*/
//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
require_once(__DIR__."/../var_globales.php");

$db_model=new db_model();
$_SESSION['flag']=0;


/*Recogemos variables de la interfaz*/
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
}

if (isset($_REQUEST['pass'])) {
	$pass=$_REQUEST['pass'];
} 

if (isset($_REQUEST['accion'])) {
	$accion=$_REQUEST['accion'];
} 

/**********************************/
/*Loguear**************************/
if($accion == "Loguear"){		

	$db_model->loguear_invitado();

}
////***Busqueda***\\\\
if($accion == "Buscar"){		
	$_SESSION['flag']=1;
	if (isset($_REQUEST['search'])) {
		$search=$_REQUEST['search'];
		$_SESSION['search']=$search;
	}
			
	$db_model->buscarPincho();
	
	if  ($_SESSION['errorSQL_noHay']==1){
	
		//header ('Location:'.__DIR__.'/../views/error/error_buscar_noHay.php');
		header ('Location:'.raiz.'views/error/error_buscar_noHay.php');
	}else{
	
		//header ('Location:'.__DIR__.'/../views/exito/buscar.php');
		header ('Location:'.raiz.'views/exito/buscar.php');
	
	}
	
}

if(isset($_REQUEST['masInfoPincho'])){
	
	$nombrePin=$_REQUEST['masInfoPincho'];
	$_SESSION['search']=$nombrePin;
	$db_model->buscarPincho();
	
	header ('Location:'.raiz.'views/exito/buscarMasInfo.php');
	
}
	
if($accion == "volver"){
	if(isset($_SESSION['tipoUsu'])){	
		if($_SESSION['tipoUsu'] == 'administrador'){
			header ('Location:'.raiz.'controllers/administrador_controlador.php');

		}else if($_SESSION['tipoUsu'] == 'establecimiento'){
			header ('Location:'.raiz.'controllers/establecimiento_controlador.php');

	}else if($_SESSION['tipoUsu'] == 'jurPro'){
			header ('Location:'.raiz.'controllers/jurPro_controlador.php');

	}else if($_SESSION['tipoUsu'] == 'jurPop'){
			header ('Location:'.raiz.'controllers/jurPop_controlador.php');

	}
	}else	{	
		header ('Location:'.raiz.'controllers/login_controlador.php');
	}
	
}

if($accion == "volver2"){
	
	header ('Location:'.raiz.'views/exito/buscar.php');
}


//Llamada a la vista
require_once(__DIR__."/../views/IU_login.php");
?>
