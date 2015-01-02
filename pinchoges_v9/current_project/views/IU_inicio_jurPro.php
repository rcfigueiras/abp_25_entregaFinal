<?php
/*enrutado*/
session_start(); 
if (isset($_REQUEST['login'])) {
	$login=$_REQUEST['login'];
	$_SESSION['login']=$login;
}else{
	$login=$_SESSION['login'];
}
require_once(__DIR__."/../var_globales.php");
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

		<?PHP include (__DIR__."/IU_Buscar.php");?>

	</div>
	
                
      <form action="<?PHP  echo raiz;?>controllers/jurPro_controlador.php" method="get"> 
      
      <div class="col-md-3">

      <button TYPE="submit" name="accion" VALUE="valorarPinchos" class="btn btn-block"
      <?PHP if($_SESSION['inicio_JP'] == 0){ ?> disabled="disabled" <?PHP } ?>
      >Valorar Pinchos</button>
	
      </div>
      
      <form/>
 <div class="col-md-6">

        <?PHP 

			
	if($_SESSION['inicio_JP'] == 1){
			
	?>
			    
	    <div class="alert alert-info">Pulse Valorar Pinchos para valorar sus pinchos</div>
	    <?PHP	}
	    else {?>
	    
	    	    <div class="alert alert-warning">No dispone de pinchos para valorar.</div>

	    <?PHP
	    }?>
	    </div>   
  
</body>

</html>



