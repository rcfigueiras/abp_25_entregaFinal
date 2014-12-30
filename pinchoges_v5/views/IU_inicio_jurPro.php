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
				<button TYPE="submit" name="accion" VALUE="valorarPinchos" class="btn btn-default">Valorar Pinchos</button>
	<form/>
    
  
</body>

</html>



