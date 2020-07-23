<?php
echo '
<html>
	<div id="arriba" align="center">
			<img src="imagenes/logonom.png" height="100" width="200" title="TuViaje">
			<h2 align="center">Conectando Ciudades desde 2002</h2>
	</div><br><br><br><br><br><br>
	<meta name="tipo" content="text/html;" http-equiv="content-type" charset="utf-8">
	<center>
		<img src="imagenes/portada.png" height="270" width="1240">
	</center><br>
	<head>
		<title>PRINCIPAL</title>
		<link rel="icon" href="imagenes/logo.ico">
	</head>
	<body>
		<div id="header">
			<h3>
				<ul class="nav">
				    <li><a href="login.php">INICIAR SESION</a></li>
				    <li><a href="principal.php">INICIO </a></li>
				    <li><a href="destinos.php" title="Ingreso de Cursos">DESTINOS</a>	
					<ul>
						<li><a href="mantenimiento_destinos.php" title="Mantenimiento de Destinos">Mantenimiento</a></li>
					</ul>
				    </li>
				    <li><a href="viajeros.php" title="Ingreso de viajeros">VIAJEROS</a>
					<ul>
						<li><a href="mantenimiento_viajeros.php" title="Mantenimiento de Viajeros">Mantenimiento</a></li>
					</ul>
				     </li>
				     
				     <li><a href="usuarios.php" title="Ingreso de Login-usuarios">USUARIOS</a>
					<ul> 
						<li><a href="mantenimiento_usuarios.php" title="Mantenimiento de Usuarios">Mantenimiento</a></li>
					</ul>
				     </li>
				   
				     <br>
				     
				</ul>
			</h3>
		</div>
		<link rel="stylesheet" href="css/encabezado.css">
	</body>
	<br><br>
</html>
';
?>	
