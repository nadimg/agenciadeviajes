<?php
	include_once 'encabezado1.php';
	include 'conexion.php';
	mysqli_select_db($conexion,"bdd_agencia_viajes");
	$consulta=mysqli_query($conexion,"Select cod_via, ced_via, nom_via, ape_via, dir_via, tel_via, fec_via, ori_via, des_via, obs_via des_nombre 
	from viajeros, destinos where cod_via=".$_GET['cod']);
	$registros=mysqli_query($conexion,"Select cod_via, ced_via, nom_via, ape_via, dir_via, tel_via, fec_via, ori_via, des_via, obs_via,ciu_des from viajeros
		inner join destinos on des_via=cod_des order by cod_via asc")
		or die("Problemas en el select:".mysqli_error($conexion));
	$consultauno=mysqli_query($conexion,"Delete from viajeros where cod_via=".$_GET['cod']);
	$fila=mysqli_fetch_array($consulta);
	echo '
	<body>
	  <h1 class="register-title">¡SE HA ELIMINADO EL SIGUIENTE VIAJERO!</h1>
		<center>
		<table border=1 class="register" bgcolor="#33CEFF">
			<tr>
			<td align="right"> Código: </td>
			<td> &nbsp; '.$fila[0].' </td>
			</tr>
			<tr>
			<td align="right"> Cedula: </td>
			<td> &nbsp; '.$fila[1].' </td>
			</tr>
			<tr>
			<td align="right"> Nombre: </td>
			<td> &nbsp; '.$fila[2].' </td>
			</tr>
			<tr>
			<td align="right"> Ape: </td>
			<td> &nbsp; '.$fila[3].' </td>
			</tr>
			<tr>
			<td align="right"> Direccion: </td>
			<td> &nbsp; '.$fila[4].' </td>
			</tr>
			<tr>
			<td align="right"> Telefono: </td>
			<td> &nbsp; '.$fila[5].' </td>
			</tr>
			<tr>
			<td align="right"> Fecha: </td>
			<td> &nbsp; '.$fila[6].' </td>
			</tr>
			<tr>
			<td align="right"> Origen: </td>
			<td> &nbsp; '.$fila[7].' </td>
			</tr>
			<tr>
			<td align="right"> Destino: </td>
			<td> &nbsp; '.$fila[8].' </td>
			</tr>
			<tr>
			<td align="right"> Observaciones: </td>
			<td> &nbsp; '.$fila[9].' </td>
			</tr>

			</table>
		</center>
		<link href="css/ingreso_datos.css" type="text/css" rel="stylesheet" media="all" />
	</body>
	';
	include_once 'pie.php';	
?>