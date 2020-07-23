<?php
	include_once 'encabezado1.php';
	include 'conexion.php';
	$consulta=mysqli_query($conexion,"Select * from login");
	echo '<center>';

	echo '<br>'.'<table border=1 bgcolor="#3ac6ff" align="center">';
	echo '<tr>';
	echo '<th colspan=9>'.'<b/>'.'USUARIOS INGRESADOS'.'</th>';
	echo '</tr>';
	echo '<tr>';
		echo '<th>'.'<b/>'.'CODIGO'.'</th>';
		echo '<th>'.'<b/>'.'NOMBRES'.'</th>';
		echo '<th>'.'<b/>'.'CONTRASEÑA'.'</th>';
		echo '<th colspan=2>'.'<b/>'.'ACCION'.'</th>';
	echo '</tr>';

	while ($fila=mysqli_fetch_array($consulta)){
		echo '<tr>';
		echo '<td>'.$fila[0].'</td>';
		echo '<td>'.$fila[1].'</td>';
		echo '<td>'.$fila[2].'</td>';
		echo '<td><a href="editar_usuario.php?cod='.$fila[0].'"> <img src="imagenes/editar.png" height="30" width="30" title="EDITAR USUARIO"></a></td>';
		echo '<td><a href="eliminar_usuario.php?cod='.$fila[0].'"> <img src="imagenes/eliminar.png" height="30" width="30" title="ELIMINAR USUARIO"> </a></td>';
		echo '</tr>';
	}
	echo '</table>';
	echo '<br>';
	echo '</center>';
	
	echo '
	<link href="css/mostrar_datos.css" type="text/css" rel="stylesheet" media="all" />
	';
	include_once 'pie.php';
?>
	