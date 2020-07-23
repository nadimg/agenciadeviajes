<?php
include 'encabezado.php';
echo'
	<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta charset="UTF-8">
			<title> LOGIN</title>
			<meta name="viewport" conten="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
			<link rel="stylesheet" href="css/estilogin.css">
		</head>
		<body>
		<form action="validarlog.php" method="post">
			<h2>LOGIN</h2>
			<input type="text" placeholder="&#128526; Usuario" name="usuario">
			<input type="password" placeholder="&#128272; Contraseña" name="clave">
			<input type="submit" value="Ingresar">
		</form>
		</body>
	</html>
';
include_once 'pie.php';
?>