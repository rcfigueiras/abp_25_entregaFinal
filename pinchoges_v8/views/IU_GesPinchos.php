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

	
    <form action="<?PHP  echo raiz;?>controllers/administrador_controlador.php" method="get"> 
	    
		<div class="col-md-3">
		
			<button TYPE="submit" name="accion" VALUE="ValidarPinchos" class="btn btn-block">Validar Pinchos</button>
			
			<button TYPE="submit" name="accion" VALUE="EliminarPinchos" class="btn btn-block">Eliminar Pinchos</button>

			
			<button TYPE="submit" NAME="accion" VALUE="AsignarPinchos" class="btn btn-block">Asignar Pinchos</button>
			
			<button TYPE="submit" NAME="accion" VALUE="DesasignarPinchos" class="btn btn-block">Desasignar Pinchos</button>
			
			<div class="col-md-5"></div>
			
			<button TYPE="submit" NAME="accion" VALUE="VolverInicio" class="btn btn-primary">Volver</button>
		
		</div>   
  

	<form/>
	
	<div class="col-md-6">
			

	<?PHP
	      
		if(isset($_SESSION['asignaciones'])){
		?>
		<div class="alert alert-info">Asignaciones realizadas hasta el momento al Jurado Profesional</div>
		<?PHP
		foreach  ($_SESSION['asignaciones'] as $valor){
		?>
		<div class="form-group">
					
			<label for="name" class="label label-default">Jurado:</label>
			<label for="name"> <?PHP echo $valor['nombre_jurPro']?> </label>

			<label for="name" class="label label-default">Pincho:</label>
			<label for="name"> <?PHP echo $valor['nombre_pincho']?> </label>					
					
		</div>
		<?PHP				
		}//fin foreach	
		} else { ?>
		
		<div class="alert alert-info">No hay ninguna asignaci&oacute;n de Pinchos realizada al Jurado Profesional</div>
		<?PHP
		
		}//fin if
		
		?>		
	</div>
</body>

</html>



