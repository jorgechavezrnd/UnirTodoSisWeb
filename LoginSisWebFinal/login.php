<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
	<form id="loginForm" action="comprobar.php" method="post">
		<label>Usuario:</label>
		<input class="inputDatos" type="text" name="user_name" required="required">
		<br/>
		<label>Contraseña:</label>
		<input class="inputDatos" type="password" name="password" required="required">
		<br/><br/>
		<input type="submit" value="Login">
		<h5><a href="../sisWebUnirTodo/index.php">IR A PAGINA PRINCIPAL SIN INICIAR SECION</a></h5><br><br>
		<h3><a href="../CrearUsuarioSisWebFinal/?cargar=crear">Crear Usuario</a></h3>
	</form>
</body>
</html>