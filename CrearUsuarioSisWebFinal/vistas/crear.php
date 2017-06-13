<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_POST['enviar'])) {
		$r = $controlador->crear(0, $_POST['user_name'], password_hash($_POST['password'], PASSWORD_BCRYPT), $_POST['type']);

		if ($r) {
			echo "Se ha registrado un nuevo usuario";
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
	<input type="text" name="password" required="required">
	<br><br>
	<label>Tipo</label><br>
	<select name="type" required="required">
		<option value="LOCAL">LOCAL</option>
		<option value="FTP">FTP</option>
	</select>
	<br><br>
	<input type="submit" name="enviar" value="Crear">
</form>