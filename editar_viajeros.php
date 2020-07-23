<?php
	include_once 'encabezado1.php';
	if(isset($_POST['txt_nom'])==true)
	{

echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
include 'conexion.php';
mysqli_select_db($conexion,"bdd_agencia_viajes");
$cod=$_POST['txt_cod'];
$ced=$_POST['txt_ced'];
$nom=$_POST['txt_nom'];
$dir=$_POST['txt_dir'];
$tel=$_POST['txt_tel'];
$fec=$_POST['cb_fec'];
$ape=$_POST['txt_ape'];
$ori=$_POST['cb_ori'];
$des=$_POST['cb_des'];
$obs=$_POST['txt_obs'];

mysqli_query($conexion,"update viajeros set nom_via='".$nom."',dir_via='".$dir."',ced_via='".$ced."',tel_via='".$tel."',ape_via='".$ape."',fec_via='".$fec."',ori_via='".$ori."',des_via='".$des."',obs_via='".$obs."'
where cod_via='".$cod."'") or die("Error guardar" .mysqli_error($conexion));

include_once 'mantenimiento_viajeros.php';
while ($fila=mysqli_fetch_array($consulta)){
	echo '<tr>';
	echo '<td>'.$fila[0].'</td>';
	echo '<td>'.$fila[1].'</td>';
	echo '<td>'.$fila[2].'</td>';
	echo '<td>'.$fila[3].'</td>';
	echo '<td>'.$fila[4].'</td>';
	echo '<td>'.$fila[5].'</td>';
	echo '<td>'.$fila[6].'</td>';
	echo '<td>'.$fila[7].'</td>';
	echo '<td>'.$fila[8].'</td>';
	echo '<td>'.$fila[9].'</td>';
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
	    
	    include 'conexion.php';
	    mysqli_select_db($conexion,"bdd_agencia_viajes");
	    $consulta=mysqli_query($conexion,"Select * from viajeros where cod_via=".$_GET['cod']);
	    $fila=mysqli_fetch_array($consulta);
	    echo '
	    <body bgcolor="white">
		<script type="text/javascript" src=js/funciones.js"></script>
		<h1 class="register-title">EDITAR VIAJERO</h1>
		<form name="productos" class="register" action="editar_viajeros.php" method="post">
			<center><table>
			<tr>
			<td> <b> Código: </b> </td>
			<td> <input type="text" name="txt_cod" value="'.$fila[0].'" readonly></td>
			</tr>

			<tr>
			<td> <b> Nombre: </b> </td>
			<td> <input type="text" name="txt_nom" value="'.$fila[2].'"></td>
			</tr>


			<tr>
			<td> <b> Cedula: </b> </td>
			<td> <input type="text" name="txt_ced" value="'.$fila[1].'"></td>
			</tr>

			<tr>
			<td><b> Destino: </b></td>
			<td> <select name="cb_des"> ';
				$consulta=mysqli_query($conexion, "Select * from destinos=);
				while ($fila=mysqli_fetch_array($consulta)) {
					echo '<option value='.$fila[0].'>'.$fila[2].'</option>;
				}
				echo'
				</select>
			</td>
			</tr>

			</tr>
			<td>
			</td>
			<td><input type="submit" class="button" name="b_guardar" value="GUARDAR"></td>
			</tr>
				</table>
			</center>
			</form>
			<link href="css/ingreso_datos.css" type="text/css" rel="stylesheet" media="all" />
		</body>
		<br>
	';
	}
	include_once 'pie.php';
?>