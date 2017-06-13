<?php 
	include_once("modulos/Enrutador.php");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vista Principal</title>
	<link href="css/estilos.css" rel="stylesheet">
</head>
<body>
	<header id="cabeceraIndex">
		<img src="imagenes/logo.jpg" alt="UCB logo" width="150" height="200">
		<img src="imagenes/banner.jpg" alt="baner ingenieria en sistemas" width="1050" height="200">
	</header>

	<nav>
		<table id="tablaOpciones">
			<tr class="opciones">
				<th>
					<a class="button" href="?cargar=noticias">Noticias</a>
				</th>
				<th>
					<a class="button" href="?cargar=informacion">Informacion General</a>
				</th>
				<th>
					<a class="button" href="?cargar=plantel">Plantel Docente</a>
				</th>
				<th>
					<a class="button" href="?cargar=cursos">Cursos de Formacion Continua</a>
				</th>
			</tr>
			<?php 

				session_start();

				if (isset($_SESSION["user_name"])) {
					echo '<p><a href="../LoginSisWebFinal/cierre.php">Cierra Sesión</a></p>';
				} else {
					echo '<p><a href="../LoginSisWebFinal/login.php">Inicia Sesión</a></p>';
				}

			?>
		</table>
	</nav>

	<section>
 		<?php 
 			$enrutador = new Enrutador();
 			if ($enrutador->validarGET($_GET['cargar'])) {
 				$enrutador->cargarVista($_GET['cargar']);
 			}
 		 ?>
 	</section>

</body>
</html>