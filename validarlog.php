<?php
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    // conectar a la BDD
    include 'conexion.php';
    $consulta="select * from login where log_nombre='$usuario' and log_contrasena='$clave'";
    $resultado=mysqli_query($conexion, $consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas>0) {
		header("location:principal.php");
	}else{
		echo "Error en la autentificacion";
	}
    mysqli_free_result($resultado);
    mysqli_close($conexion);
?>