<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_POST['enviar'])) {

		if ($_POST['password']) {
			$type = 'LOCAL';
		} else {
			$type = 'FTP';
		}

		$r = $controlador->crear(0, $_POST['user_name'], password_hash($_POST['password'], PASSWORD_BCRYPT), $type);

		if ($r) {
			echo "Se ha registrado un nuevo usuario";
			header('Location: ../sisWebUnirTodo/index.php');
		} else {
			echo "El nombre de usuario que esta intentando ingresar ya existe";
		}
	}
?>
<h3>Registro de un nuevo usuario</h3>
<hr>
<form action="" method="POST">
	<label>Nombre de Usuario</label><br>
	<input type="text" name="user_name" required="required">
	<br><br>
	<label>Contraseña</label><br>
	<input type="text" name="password">
	<br><br>
	<input type="submit" name="enviar" value="Crear">
</form>