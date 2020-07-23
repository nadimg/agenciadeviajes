<?php
	include_once 'encabezado1.php';
	if(isset($_POST['txt_nom']))
	{
	echo '<meta name="tipo" content="text/html;" http-equiv="Content-Type" charste="utf-8">';
	include 'conexion.php';
	mysqli_select_db($conexion,"bdd_agencia_viajes");
	$nom=$_POST['txt_nom'];
	$ape=$_POST['txt_ape'];
	$des=$_POST['cb_des'];
	mysqli_query($conexion,"insert into viajeros values(null,'".$nom."','".$ape."','".$des."')") or die("Error guardar" .mysqli_error($conexion));
//////////////////////////////////////////
	include_once 'mantenimiento_viajeros.php';
	mysqli_close($conexion);
	echo'<br>';
	echo'<br>';
	}else
	{
	include 'conexion.php';
	mysqli_select_db($conexion, "bdd_agencia_viajes");
///////// formulario
	echo '
	<body bgcolor="#3ac6ff">
		<script type="text/javascript" src="js/funciones.js"></script>
		<h1 class="register-title">INGRESO DE VIAJEROS</h1>
		<form name="viajeros" class="register" action="viajeros.php" method="post">
			<center>
				<table bgcolor="#00c45f">
					<tr>
					<td><b/> Código: </td>
					<td> <input type="text" name="txt_cod" disabled="disabled"></td>
					</tr>
					<tr>
					<td><b/> Nombre: </td>
					<td> <input type="text" name="txt_nom" onkeypress="return soloLetras(event)"></td>
					</tr>
					<tr>
					<td><b/> Apellido: </td>
					<td> <input type="text" name="txt_ape" onkeypress="return soloLetras(event)"></td>
					</tr>
					<tr>


					<td><b> Destino: </b></td>
					<td> 

						<select name="cb_des">';
							$consulta=mysqli_query($conexion, "Select * from destinos");
							while ($fila=mysqli_fetch_array($consulta)){
							echo '<option value='.$fila[0].'>'.$fila[1].'</option>';
							}
							echo'
						</select>
					</td>
					</tr>
					<tr>
					<td> <input type="reset" class="button" name="b_nuevo" value="NUEVO"></td>
					<td> <input type="submit" class="button" name="b_guardar" VALUE="GUARDAR"></td>
					</tr>
				</table>
			</center>
		</form>
		<link href="css/ingreso_datos.css" type="text/css" rel="stylesheet" media="all" />
	</body>
';
}
include_once 'pie.php';
?>
			