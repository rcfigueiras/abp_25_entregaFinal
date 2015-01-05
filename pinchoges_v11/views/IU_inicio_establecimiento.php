<?php
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
	$_SESSION['login']=$_REQUEST['login'];
}else{
	$login=$_SESSION['login'];
}

require_once(__DIR__."/../models/db_model.php");
$db_model=new db_model();

/*ruteado*/
//file:views/IU_inicio_establecimiento.php
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>
 
</head>

<body>       

	<!-- Cabecera -->
	<?PHP include __DIR__."/IU_cabecera.php";?>
	<!-- Buscar -->
	<?PHP include __DIR__."/IU_Buscar.php";?>	


    <form action="<?PHP  echo raiz;?>controllers/establecimiento_controlador.php" method="get" role="form"> 
	<div class="col-md-3">

	    <?PHP if(!($_SESSION['tiene_pincho'])) { ?>
		    <div class="btn-group">
		    			<button TYPE="submit" name="accion" VALUE="RellenarFormulario" class="btn btn-block">Rellenar Formulario</button>

	    
	    <?PHP } else {?>
			    <button TYPE="submit" name="accion" VALUE="ModificarPincho" class="btn btn-block">Modificar Pincho</button>

	    <?PHP } ?>
				    
	      </div>   
	</div>
    <form/>
    	<div class="col-md-6">

        <?PHP 

			
	if(isset($_SESSION['estado_pincho'])){
			
	?>
			    
	    <div class="alert alert-info"><?PHP echo"El estado de su pincho 
	    en el concurso es: ".$_SESSION['estado_pincho']?>.</div>
	    <?PHP	}	?>
	    </div>
</body>

</html>



