<?php
session_start();
/*enrutado*/
//Llamada al modelo
require_once(__DIR__."/../models/db_model.php");
require_once(__DIR__."/../var_globales.php");
//Recogemos la acción 
if (isset($_REQUEST['accion'])) {
	$accion=$_REQUEST['accion'];
} 

$db_model=new db_model();

/*Comprobamos si el administrador ha rellenado
el formulario de la información del sistema*/

$sql="SELECT * FROM pinchoges WHERE ID_administrador = '1'";

$resultado=mysql_query($sql);
if(mysql_fetch_row($resultado) > 0){
	$_SESSION['tiene_info']=1;
}else{
	$_SESSION['tiene_info']=0;
}

/*--------------------------------------------------------*/
/*VALIDAR PINCHOS******************************************/
if($accion=='ValidarPinchos'){

	$db_model->validarPinchos();	
	if($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_noHayPinValidar.php');
	}else{
		
		header ('Location:'.raiz.'views/IU_validarPinchos.php');
	}
}
/*--------------------------------------------------------*/
/*MOSTRAR FORMULARIO A VALIDAR COMPLETO *******************/
if(isset($_REQUEST['validaEste'])){
	
	$nombrePin=$_REQUEST['validaEste'];
	$_SESSION['nombrePin']=$nombrePin;									
	header ('Location:'.raiz.'views/IU_validarPincho_formulario.php');

}
/*--------------------------------------------------------*/
/*ALTA DE ESTE PINCHO *************************************/
if($accion == "altaPincho"){
	$db_model->altaPincho();
	if($_SESSION['errorSQL']){
			header ('Location:'.raiz.'views/error/error_valida_pincho_sql.php');

	}else{
		/*
		Volvemos a mostrar el inicio de validar pinchos
		*/
		$db_model->validarPinchos();	
		if($_SESSION['errorSQL']){
		//error_noHayPinValidar
			header ('Location:'.raiz.'views/error/error_noHayPinValidar.php');
		}else{
			
			header ('Location:'.raiz.'views/IU_validarPinchos.php');
		}			
	}
}

/*--------------------------------------------------------*/
/*ELIMINAR PINCHOS******************************************/
if($accion=='EliminarPinchos'){

	$db_model->eliminarPinchos();
	if($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_noHayPinEliminar.php');
	}else{
		
		header ('Location:'.raiz.'views/IU_eliminarPinchos.php');
	}
}
/*--------------------------------------------------------*/
/*MOSTRAR FORMULARIO A ELIMINAR COMPLETO *******************/
if(isset($_REQUEST['eliminaEste'])){
	
	$_SESSION['nombrePin']=$_REQUEST['eliminaEste'];
	header ('Location:'.raiz.'views/IU_eliminarPincho_formulario.php');

}

/*--------------------------------------------------------*/
/*ELIMINA ESTE PINCHO *************************************/
if($accion == "eliminaPincho"){
	$db_model->eliminaPincho();
	if($_SESSION['errorSQL']){
			header ('Location:'.raiz.'views/error/error_valida_pincho_sql.php');

	}else{
		/*
		Volvemos a mostrar el inicio de validar pinchos
		*/
		$db_model->eliminarPinchos();	
		if($_SESSION['errorSQL']){
			header ('Location:'.raiz.'views/error/error_noHayPinEliminar.php');
		}else{
			
			header ('Location:'.raiz.'views/IU_eliminarPinchos.php');
		}			
	}
}
/*--------------------------------------------------------*/
/*LOGOUT***************************************************/
if($accion == "Logout"){
	session_destroy();
	header ('Location:'.raiz.'index.php');
}
/*--------------------------------------------------------*/
/*VOLVER***************************************************/
if($accion == "VolverInicio"){
	header ('Location:'.raiz.'controllers/administrador_controlador.php');
}
if($accion == "VolverListaValidar"){
	header ('Location:'.raiz.'views/IU_validarPinchos.php');
}
if($accion == "VolverListaEliminar"){
	header ('Location:'.raiz.'views/IU_eliminarPinchos.php');
}

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*MODIFICAR ALTA SISTEMA**********************************/
if($accion == "ModificarInfoSistema")
{
	$db_model->editarInfoSistema();
	
	if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_edita_info_sistema_sql.php');

	}else{
		header ('Location:'.raiz.'views/EditarInfoSistema.php');
	}
}
	

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*EDITAR ALTA SISTEMA*******************************************/
if ($accion == "Editar")
{
		$db_model->editarFormularioSistema();
		if($_SESSION['campos_incompletos']){
				header ('Location:'.raiz.'views/error/error_campos_incompletos_editar_info.php');
		}else{
			header ('Location:'.raiz.'views/exito/exito_edicion_info.php');
		}			
} 

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*RELLENAR ALTA SISTEMA***************************/
if($accion == "RellenarInfoSistema"){

	header ('Location:'.raiz.'views/RellenarInfoSistema.php');

}
/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*ENVIAR FORMULARIO ALTA SISTEMA*****************************/
 if($accion == "EnviarFormularioSistema"){		

	$db_model->enviarFormularioSistema();
	//Validamos la consulta SQL
	if($_SESSION['campos_incompletos']){
				header ('Location:'.raiz.'views/error/error_campos_incompletos_info.php'); 
	}else if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_inserta_formulario.php');
		}
		else{		
				
			header ('Location:'.raiz.'views/exito/exito_insercion_info.php');
	}	
} 

/*--------------------------------------------------------*/
/*ASIGNAR PINCHOS******************************************/
if($accion=='AsignarPinchos' || $accion== "VolverAsigna_Jurado"){

	$db_model->asignarPinchos_listarJurado();
	
	if($_SESSION['hay_jurado'] == 0){
		header ('Location:'.raiz.'views/error/error_noHayJurPro.php');
	}else{
		
		header ('Location:'.raiz.'views/IU_asignarPinchos_Jurado.php');
	}
}

/*--------------------------------------------------------*/
/*MOSTRAR LISTA DE PINCHOS A ASIGNAR A JURADO**************/
if(isset($_REQUEST['asignaJurado']) || $_REQUEST['exito_vinculo'] == 1 ){
	
	$_SESSION['nombreJurado'] = $_REQUEST['asignaJurado'];
	
	$db_model->asignarPinchos_listarPinchos();
	
	$_SESSION['exito_vinculo'] = $_REQUEST['exito_vinculo'];

	if($_SESSION['cupo_completo'] == 1){
	
	    header ('Location:'.raiz.'views/IU_asignarPinchos_Pinchos.php');

	}else{
	
	if($_SESSION['hayPin_asignar'] == 0){
	
	  header ('Location:'.raiz.'views/IU_asignarPinchos_Pinchos.php');
	
	}else{	

	  header ('Location:'.raiz.'views/IU_asignarPinchos_Pinchos.php');
	
	}
	
	}
	
}

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/

/*--------------------------------------------------------*/
/*VINCUlAR PINCHO CON JURADO PROFESIONAL******************/
if(isset($_REQUEST['asignaPincho'])){
	
	$_SESSION['nombrePincho'] = $_REQUEST['asignaPincho'];
	
	$db_model->asignarPinchos_vincular();
		
	if($_SESSION['exito_vinculo'] == 0){
	    
	    header ('Location:'.raiz.'views/error/error_vinculacion.php');
	
	} else {	

	    header ('Location:'.raiz.'views/exito/exito_vinculacion.php');

	}
}

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
/*--------------------------------------------------------*/
/*DESASIGNAR PINCHOS******************************************/
if($accion=='DesasignarPinchos'  || $accion== "VolverDesasigna_Jurado"){

	$db_model->desasignarPinchos_listarJurado();
	
	if($_SESSION['hay_jurado'] == 0){
	
		header ('Location:'.raiz.'views/error/error_noHayAsignaciones.php');
	
	}else{
		
		header ('Location:'.raiz.'views/IU_desasignarPinchos_Jurado.php');
	}
}
/*--------------------------------------------------------*/
/*MOSTRAR LISTA DE PINCHOS ASIGNADOS A JURADO**************/
if(isset($_REQUEST['desasignaJurado']) || $_REQUEST['exito_desvinculacion'] == 1){
	
	$_SESSION['nombreJurado'] = $_REQUEST['desasignaJurado'];
	$_SESSION['exito_desvinculacion'] = $_REQUEST['exito_desvinculacion'];
	
	$db_model->desasignarPinchos_listarPinchos();
	

	header ('Location:'.raiz.'views/IU_desasignarPinchos_Pinchos.php');
	
	
	
}

/*--------------------------------------------------------*/
/*DESVINCUlAR PINCHO DE UN JURADO PROFESIONAL***************/
if(isset($_REQUEST['desasignaPincho'])){
	
	$_SESSION['nombrePincho'] = $_REQUEST['desasignaPincho'];
	
	$db_model->desasignarPinchos_desvincular();
		
	echo "ESTO: ".$_SESSION['esto']."<br>";
	echo "num pinchos: ".$_SESSION['num_pin']['num_pin']."<br>";
	echo "SESSION exito desvincular = ".$_SESSION['exito_desvinculacion']."<br>";
	echo "REQUEST exito desvincular = ".$_REQUEST['exito_desvinculacion']."<br>";
	
	
	if($_SESSION['exito_desvinculacion'] == 0){
	    
	    header ('Location:'.raiz.'views/error/error_desvinculacion.php');
	
	} else {	

	    header ('Location:'.raiz.'views/exito/exito_desvinculacion.php');

	}
}



/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*GESTIONAR JURADO PROFESIONAL***************************/
if($accion=='GesJurPro'){

	$db_model->gesJurPro();	
	if($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_noHayJurPro2.php');
	}else{
		
		header ('Location:'.raiz.'views/GesJurPro.php');
	}
}
/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*RELLENAR NUEVO JURADO PROFESIONAL**********************/
if($accion == "NuevoJurPro"){

	header ('Location:'.raiz.'views/RellenarDatosJurPro.php');

}
/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*ENVIAR FORMULARIO NUEVO JURADO PROFESIONAL*************/
 if($accion == "EnviarFormularioJurPro"){		

	$db_model->enviarFormularioJurPro();
	//Validamos la consulta SQL
	if($_SESSION['campos_incompletos']){
				header ('Location:'.raiz.'views/error/error_campos_incompletos_jurPro.php'); 
	}else if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_gestion_jurPro.php');
		}
		else{		
			$db_model->gesJurPro();		
			header ('Location:'.raiz.'views/exito/exito_insercion_jurPro.php');
	}	
	
} 

/*--------------------------------------------------------*/
/*MOSTRAR FORMULARIO EDICION JURADO PROFESIONAL **********/

if(isset($_REQUEST['editarJurPro'])){
	
	$nombreJurPro=$_REQUEST['editarJurPro'];
	$_SESSION['nombreJurPro']=$nombreJurPro;
	header ('Location:'.raiz.'views/EditarDatosJurPro.php');

}

/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*EDITAR DATOS JURADO PROFESIONAL************************/
if ($accion == "EditarFormularioJurPro")
{
		$db_model->editarFormularioJurPro();
		if($_SESSION['campos_incompletos']){
				header ('Location:'.raiz.'views/error/error_campos_incompletos_editar_jurPro.php');
		}else{
			$db_model->gesJurPro();	
			header ('Location:'.raiz.'views/exito/exito_edicion_jurPro.php');
		}			
} 

/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*VOLVER A GESTIONAR JURADO PROFESIONAL******************/
if($accion == "VolverGesJurPro"){
	header ('Location:'.raiz.'views/GesJurPro.php');
}

/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/*VOLVER A GESTIONAR JURADO PROFESIONAL******************/
if($accion == "GestionarPinchos" || $accion=="VolverGesPincho"){
      
	$db_model->gestionarAsignaciones();
		
		header ('Location:'.raiz.'views/IU_GesPinchos.php');

}

/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/******CONFIRMACION ELIMINAR JURADO PROFESIONAL**********/
if($accion == "EliminarJurPro"){
	header ('Location:'.raiz.'views/EliminarDatosJurPro.php');
}


/*--------------------------------------------------------*/
/*-------------------------------------------------------*/
/***************ELIMINAR JURADO PROFESIONAL**************/
 if($accion == "EliminarJurProConf"){		

	$db_model->eliminarJurPro();
	//Validamos la consulta SQL
	 
	 if ($_SESSION['errorSQL']){
		header ('Location:'.raiz.'views/error/error_gestion_jurPro.php');
		}
		else{		
			$db_model->gesJurPro();		
			header ('Location:'.raiz.'views/exito/exito_eliminar_jurPro.php');
	}	
	
}


/*-------------------------------------------------------*/
/*-------------------------------------------------------*/
//Llamada a la vista
require_once(__DIR__."/../views/IU_inicio_administrador.php");
  
?>

