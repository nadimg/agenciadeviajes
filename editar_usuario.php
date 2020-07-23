<?php
	include_once 'encabezado1.php';
	if(isset($_POST['txt_nom'])==true)
	{
///guardar en la bdd
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
include 'conexion.php';
mysqli_select_db($conexion,"bdd_agencia_viajes");
$cod=$_POST['txt_cod'];
$nom=$_POST['txt_nom'];
$pas=$_POST['txt_pas'];
mysqli_query($conexion,"update login set log_nombreusuario='".$nom."',log_contrasena='".$pas."' 
where log_codigo='".$cod."'") or die("Error al Guardar".mysqli_error($conexion));

include_once 'mantenimiento_usuarios.php';
while ($fila=mysqli_fetch_array($consulta)){
	echo '<tr>';
	echo '<td>'.$fila[0].'</td>';
	echo '<td>'.$fila[1].'</td>';
	echo '<td>'.$fila[2].'</td>';
	echo '<tr>';
}
echo '<br>';
mysqli_close($conexion);
echo'<br>';
echo'<br>';
echo '
<link href="css/mostrar_datos.css" type="text/css" rel="stylesheet" media="all" />
';
	}else
	{
	    //crear el formulario
	    include 'conexion.php';
	    mysqli_select_db($conexion,"bdd_agencia_viajes");
	    $consulta=mysqli_query($conexion,"Select * from login where log_codigo=".$_GET['cod']);
	    $fila=mysqli_fetch_array($consulta);
	    echo '
	    <body bgcolor="white">
		<script type="text/javascript" src=js/funciones.js"></script>
		<h1 class="register-title">EDITAR DESTINOS</h1>
		<form name="destinos" class="register" action="editar_destinos.php" method="post">
			<center><table>
			<tr>
			<td> <b> Código: </b> </td>
			<td> <input type="text" name="txt_cod" value="'.$fila[0].'" readonly></td>
			</tr>

			<tr>
			<td> <b> Nombres: </b> </td>
			<td> <input type="text" name="txt_nom" value="'.$fila[1].'" onkeypress="return soloLetras(event)"></td>
			</tr>

			<tr>
			<td><b> Contraseña: </b></td>
			<td> <input type="password" name="txt_pas" value="'.$fila[2].'" onkeypress="return soloLetras(event)"></td>
			</tr>

			<tr>
			<td>
			</td>
			<td><input type="submit" class="button" name="b_guardar" value="GUARDAR"></td>
			</tr>
		</table
		</center>
		</form>
	<link href="css/ingreso_datos.css" type="text/css" rel="stylesheet" media="all" />
	</body>
	<br>
	';
	}
	include_once 'pie.php';
?>