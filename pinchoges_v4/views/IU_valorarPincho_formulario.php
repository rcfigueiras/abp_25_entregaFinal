<?php
/*enrutado*/
session_start(); 
$login=$_SESSION['login'];
require_once(__DIR__."/../var_globales.php");
require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>
</head>

<body>
	<!-- Cabecera -->
	<div class="form-group">
		<?PHP include(__DIR__."/IU_cabecera.php"); ?>
	</div>
                
    <form action="<?PHP echo raiz;?>controllers/jurPro_controlador.php" method="get"> 
		
		<?PHP
			foreach  ($_SESSION['pinchos'] as $valor){
				if($valor['nombre_pincho'] == $_SESSION['nombrePin']){?>
					
				<label for="name" class="label label-default">Nombre del pincho: </label>
				<input type="text" class="form-control" name="nombrePin" placeholder="<?PHP echo $valor['nombre_pincho']?>" readonly>
			</div>						
			<div class="form-group">
				<label for="name" class="label label-default">Foto: </label>
				<div class="form-group">
					<img src="<?PHP echo $valor['foto']?>" alt="otraCosa" class="img-thumbnail" width='250'>
				
				</div>
			</div>		
			<div class="form-group">
				<label for="name" class="label label-default">Tipo: </label>
				<input type="text" class="form-control" name="tipoPin" placeholder="<?PHP echo $valor['tipo']?>" readonly>
			</div>						
			
			<div class="form-group">
				<label for="name" class="label label-default">Descripci&oacuten: </label>
				<input type="text" class="form-control" name="descPin" placeholder="<?PHP echo $valor['descripcion']?>" readonly>
			</div>						

			<div class="form-group">
				<label for="name" class="label label-default">Precio: </label>
				<input type="text" class="form-control" name="precioPin" placeholder="<?PHP echo $valor['precio']?>" readonly>
			</div>								

							
			
			<div class="form-group">
				<label for="name" class="label label-default">Horario: </label>
				<input type="text" class="form-control" name="horarioPin" placeholder="<?PHP echo $valor['horario']?>" readonly>
			</div>						
			
			<div class="form-group">
				<label for="name" class="label label-default">Nota : </label>
				<input type="text" class="form-control" name="nota" placeholder="Introduzca su nota" >
			</div>						
			
			<div class="form-group">
				<label for="name" class="label label-default">Comentario : </label>
				<input type="text" class="form-control" name="comentario" placeholder="Introduzca su comentario" >
			</div>	
				<?PHP
				}							
			}
			?>			
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="valoraYa" class="btn btn-default">Valorar Pincho</button>
			<button TYPE="submit" name="accion" VALUE="Volver_listaValorar" class="btn btn-default">Volver</button>
		</div>  
	<form/>  
  
</body>

</html>



