<?php
  include_once 'encabezado1.php';
  if (isset($_POST['txt_nom'])==true)
  {
      //guardar en la bdd
    echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>';
    include 'conexion.php';
    mysqli_select_db($conexion, "bdd_agencia_viajes");
    $nom=$_POST['txt_nom'];
    $pai=$_POST['txt_pai'];
    mysqli_query($conexion,"insert into destinos values(null,'".$nom."','".$pai."')") or die("Error al Guardar".mysqli_error($conexion));
    include_once 'mantenimiento_destinos.php';
    mysqli_close($conexion);
  }else {  //crear el formulario
    echo '
    <body  bgcolor="#3ac6ff">
      <script type="text/javascript" src="js/funciones.js"></script>
      <h1 class="register-title">INGRESO DE DESTINO</h1>
      <form name="destinos" class="register" action="destinos.php" method="post">
	<center><table bgcolor="#00c45f">
		<tr>
		  <td> <b> Codigo: </b></td>
		  <td> <input type="text" name="txt_cod" disabled="disabled"></td>
		</tr>
		<tr>
		  <td> <b> Ciudad: </b></td>
		  <td> <input type="text" name="txt_nom" onkeypress="return soloLetras(event)"></td>
		</tr>
		  <td> <b> Pais: </b></td>
		  <td> <input type="text" name="txt_pai" onkeypress="return soloLetras(event)"></td>
		</tr>
		<tr>
		  <td> <br> <center> <input type="reset" class="button" name="b_nuevo" value="NUEVO">
		  <td> <br> <input type="submit" class="button" name="b_guardar" value="GUARDAR"></td>
		  </center> </td>
		</tr>
		</table></center>
		</form>
		<link href="css/ingreso_datos.css" type="text/css" rel="stylesheet" media="all" />
	</body>
	<br>
	';
	}
	include_once 'pie.php';
?>
