<?php 
	$controlador = new ControladorUsuarios();
	if (isset($_GET['id'])) {
		$row = $controlador->ver($_GET['id']);
	} else {
		header("Location: index.php");
	}

	if (isset($_POST['enviar'])) {
		$controlador->editar($_GET['id'], $_POST['user_name'], $_POST['password'], $_POST['type']);
		header('Location: index.php');
	}

 ?>

 <form action="" method="POST">
 	Id: <br>
 	<input type="number" name="id" value="<?php echo $row['id']; ?>" disabled>
 	<br><br>
 	Nombre de Usuario: <br>
 	<input type="text" name="user_name" value="<?php echo $row['user_name']; ?>" required="required">
 	<br><br>
 	Contraseña: <br>
 	<input type="text" name="password" value="<?php echo $row['password']; ?>" required="required">
 	<br><br>
 	Tipo: <br>
 	<select name="type" required="required" value="<?php echo $row['type']; ?>">
		<option value="LOCAL">LOCAL</option>
		<option value="FTP">FTP</option>
	</select>
 	<br><br>
 	<input type="submit" name="enviar" value="Editar">
 </form>