<?php 
	$controlador = new ControladorUsuarios();
	$resultado = $controlador->index();
?>
<h3>Pagina de inicio</h3>
<table border="1">
	<thead>
		<th>Id</th>
		<th>Nombre de Usuario</th>
		<th>Contraseña</th>
		<th>Tipo</th>
	</thead>
	<tbody>
		<?php while ($row = mysql_fetch_array($resultado)): ?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['user_name'] ?></td>
				<td><?php echo $row['password'] ?></td>
				<td><?php echo $row['type'] ?></td>
				<td>
					<a href="?cargar=ver&id=<?php echo $row['id']; ?>">Ver</a>
					<a href="?cargar=editar&id=<?php echo $row['id']; ?>">Editar</a>
					<a href="?cargar=eliminar&id=<?php echo $row['id']; ?>">Eliminar</a>
				</td>
			</tr>
		<?php endwhile; ?>
	</tbody>
</table>