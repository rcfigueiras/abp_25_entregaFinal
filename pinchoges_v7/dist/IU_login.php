
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">


<head>
	<title>PinchoGés</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media 
	queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page 
	via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
	html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
	respond.min.js"></script>
	<![endif]-->
  </head>

<body>
 
	<form action="/controllers/login_controlador.php" method="get" role="form">
		<div class="form-group">
			<label for="name">Buscar</label>
			<input type="text" class="form-control" placeholder="Introsduzca su búsqueda">
		</div>
		<div class="btn-group">
			<button TYPE="submit" name="accion"  VALUE="Buscar" class="btn btn-default">Buscar</button>
		</div>  
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="login" placeholder="Introduzca su usuario">
		</div>
		<div class="form-group">
			<label for="name">Contraseña</label>
			<input type="password" class="form-control" name="pass" placeholder="Introduzca su contraseña">
		</div>
		<div class="btn-group">
			<button TYPE="submit" name="accion" VALUE="Loguear" class="btn btn-default">Login</button>
		</div>   
	</form>
      
   
</body>

</html>



