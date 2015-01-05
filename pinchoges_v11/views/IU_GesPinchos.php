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
			
					<button TYPE="submit" name="accion" VALUE="VolverInicio" class="btn btn-block">
		<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 
		Volver</button>	
			
		</div>   
  

	<form/>
	
	<div class="col-md-6">
			

	      
		
		
		    <div class="panel panel-default">
      <!-- Default panel contents -->
<?PHP
	      
		if(isset($_SESSION['asignaciones'])){
		?>
		<div class="alert alert-info">Asignaciones realizadas hasta el momento al Jurado Profesional</div>
		 <!-- Table -->
      <table class="table">
        <thead>
          <tr>
            <th>Jurado Profesional</th>
            <th>Pincho</th>
          </tr>
        </thead>
        <tbody>

        <?PHP foreach  ($_SESSION['asignaciones'] as $valor) { ?>
	  <tr>

	    <td><?PHP echo $valor['nombre_jurPro']?> </td>
	    <td><?PHP echo $valor['nombre_pincho']?> </td>
					  
          </tr>

		<?PHP				
		}//fin foreach	?>
        </tbody>

        
      </table>
		
		<?PHP    } else { ?>
		
		<div class="alert alert-info">No hay ninguna asignaci&oacute;n de Pinchos realizada al Jurado Profesional</div>
		<?PHP
		
		}//fin if
		
		?>	 
      
     
    </div>
  </div>
	</div>
	
	
</body>

</html>



