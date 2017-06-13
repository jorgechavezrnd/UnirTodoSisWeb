<?php 
	include_once("modulos/Enrutador.php");
	include_once("modulos/Controlador.php");
 ?>

 <!DOCTYPE html>
 <html>
	 <head>
	 	<meta charset="utf-8"/>
	 	<title>Usuarios</title>
	 	<link rel="stylesheet" href="css/general.css">
	 </head>
	 <body>
	 	<header>
	 		USUARIOS
	 	</header>

	 	<nav>
	 		<ul>
	 			<li><a href="index.php">Inicio</a></li>
	 			<li><a href="?cargar=crear">Registrar</a></li>
	 		</ul>
	 	</nav>

	 	<section>
	 		<?php 
	 			$enrutador = new Enrutador();
	 			if ($enrutador->validarGET($_GET['cargar'])) {
	 				$enrutador->cargarVista($_GET['cargar']);
	 			}
	 		 ?>
	 	</section>

	 	<footer>
	 		Todos los derechos reservados &copy GrupoQueUneTodo
	 	</footer>
	 </body>
 </html>