<?php
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}else{
	$login=$_SESSION['login'];
}
//file:views/IU_inicio_administrador.php
/*ruteado*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>

</head>

<body>
	<!-- Cabecera -->
	<div class="form-group">
		<?PHP include __DIR__."/IU_cabecera.php";?>
	</div>
		<!-- Buscar -->
	<div class="form-group">

		<?PHP include __DIR__."/IU_Buscar.php";?>
	
	</div>
	
    <form action="<?PHP  echo raiz;?>controllers/administrador_controlador.php" method="get"> 
	    
	    <div class="col-md-3">

           <?PHP if(!($_SESSION['tiene_info'])) { ?>
		
		
			<<button TYPE="submit" name="accion" VALUE="RellenarInfoSistema" class="btn btn-block">Rellenar informaci&oacuten del sistema</button>
				
		<?PHP }else{ ?>
		
			<button TYPE="submit" name="accion" VALUE="ModificarInfoSistema" class="btn btn-block">Modificar Info Sistema</button>
			
		<?PHP } ?>	
			
			
			<button TYPE="submit" name="accion" VALUE="ValidarPinchos" class="btn btn-block">Validar Pinchos</button>
			
			<button TYPE="submit" name="accion" VALUE="ListarAsignaciones" class="btn btn-block">Listar Asignaciones</button>
			
			<button TYPE="submit" name="accion" VALUE="AsignarPinchos" class="btn btn-block">Asignar Pinchos</button>
			
			<button TYPE="submit" name="accion" VALUE="DesasignarPinchos" class="btn btn-block">Desasignar Pinchos</button>
			
			<button TYPE="submit" name="accion" VALUE="GesJurPro" class="btn btn-block">Gestionar Jurado Profesional</button>
		
		</div>   		

  

	<form/>
<body>

</html>



