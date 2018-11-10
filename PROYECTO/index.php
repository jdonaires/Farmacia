<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>FarmiSalud</title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
  <link rel="icon" type="img/jpg" href="img/a.jpg"> <!-- ESTA EDICION SIRVE PARA AGREGAR ICONO AL EMCABEZADO DE LA PAGINA.-->
</head>

<body  class="cajon">
	<nav class="navegador" align="center">
		<span>FamiSalud</span>
	</nav>
	<form class="formulario">
		<table >
			<tr >

				<td><input type="text" name="" placeholder="Usuario"  required ></td> <!--Esta edicion se utiliza para que el usuario Ingrese datos al Campo y no lo deje vacio-->
			</tr>
			<tr >

				<td><input type="text" name="" placeholder="Clave"  required ></td>
			</tr>
			<tr>

				<td ><input type="submit" name="" value="INSERTAR" style="width:100%;"></td>
				<td ><input type="submit"  name="" value="Registrar Empleado" style="width:100%;"> <a href="DESIGNER/registrarPersona.php" > Registrar Empleado</a></td><!--ACCEDO PARA ENTRAR A LA DIRECCION DEL REGITRO DE EMPLEADO-->
			</tr>
		</table>
	</form>
</body>
</html>
