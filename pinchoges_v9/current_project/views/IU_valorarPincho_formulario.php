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
    <?PHP include(__DIR__."/IU_cabecera.php"); ?>
    
    <div class="col-md-3"></div><!-- Desplazamiento hacia la derecha del cuerpo de la página -->
	
    <div class="col-md-5"><!-- Ancho del cuerpo de la página -->
	

    <form action="<?PHP echo raiz;?>controllers/jurPro_controlador.php" method="get"> 
		
		
		
    <?PHP
	    foreach  ($_SESSION['pinchos'] as $valor){
		    if($valor['nombre_pincho'] == $_SESSION['nombrePin']){?>
		    
		    <div class="panel panel-default">
	      <div class="panel-heading">
		<h2 class="panel-title">Informaci&oacute;n detallada del pincho.</h2>
	      </div>
	      	<div class="alert alert-info">Intruduzca su nota y pulse valorar.</div>
	    <button TYPE="submit" name="accion" VALUE="Volver_listaValorar" class="btn btn-block">
	      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	     Volver
	     </button>
	    <div class="panel-body">	
	    <div class="form-group">
	      <img src="<?PHP echo $valor['foto']?>" alt="otraCosa" class="img-thumbnail" width='250'>
	    </div>	
	    <div class="form-group">
		  <label class="label label-info">Nombre</label>
		  <h4><?PHP echo $valor['nombre_pincho']?></h4>
	    </div>						
	    
	    <div class="form-group">
		  <label class="label label-info">Tipo</label>
		  <h4><?PHP echo $valor['tipo']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Descripci&oacute;n</label>
		  <h4><?PHP echo $valor['descripcion']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Precio</label>
		  <h4><?PHP echo $valor['precio']?><span class="glyphicon glyphicon-euro" aria-hidden="true"></span></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Horario</label>
		  <h4><?PHP echo $valor['horario']?></h4>
		</div>
		
		<div >
		  <label class="label label-info">Establecimiento</label>
		  <h4><?PHP echo $valor['nombre_estab']?></h4>
		</div>
		
		<div class="form-group">
		  <label class="label label-info">Direcci&oacute;n</label>
		  <h4><?PHP echo $valor['direccion']?></h4>
		</div>
	    			
	    
	    <div class="form-group">
		    <label for="name" class="label label-warning">Nota : </label>
		    <input type="text" class="form-control" name="nota" placeholder="Introduzca una nota num&eacute;rica del 1 al 10" >
	    </div>						
	    
	    <div class="form-group">
		    <label for="name" class="label label-warning">Comentario : </label>
		    <input type="text" class="form-control" name="comentario" placeholder="Introduzca su comentario" >
	    </div>	
		    <?PHP
		    }							
	    }
	    ?>			
	    <button TYPE="submit" name="accion" VALUE="valoraYa" class="btn btn-block">
	    <span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span>  Valorar
	    </button>
	    
	    <button TYPE="submit" name="accion" VALUE="Volver_listaValorar" class="btn btn-block">
	      <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>
	     Volver
	     </button>
<form/>  

</body>

</html>



