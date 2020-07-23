<?php

$usuario = $_POST['usuario']; //del name="usuario" de index_login.php
$clave = $_POST['clave'];      // del name="clave" de index_login.php

//conectar a la BDD
include 'conexion.php';

$consulta="select * from login where nombre='$usuario' and contrasena='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if($filas>0)  {
	header("location:bienvenidos.html"); // aqui ira el programa de enlace del proyecto
}else{
	echo "Error en la autentificacion";
}

mysqli_free_result($resultado);
mysqli_close($conexion);
?>