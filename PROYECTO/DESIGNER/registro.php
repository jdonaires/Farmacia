<?php

require_once('../BOL/persona.php');
require_once('../BOL/empleado.php');
require_once('../DAO/EmpleadoDAO.php');

$per=new Persona();
$emp=new Empleado();
$empDAO=new EmpleadoDAO();


if (isset($_POST['guardar'])) {
    $emp->__SET('dni', $_POST['dni']);
    $emp->__SET('turno',$_POST['turno']);
    $emp->__SET('especialidad',$_POST['especialidad']);
    $emp->__SET('clave', $_POST['clave']);
    $emp->__SET('usuario', $_POST['usuario']);
    $per->__SET('dni',$_POST['dni']);
    $per->__SET('nombre',$_POST['nombres']);
    $per->__SET('apellido',$_POST['apellidos']);
    $per->__SET('correo',$_POST['correo']);
    $per->__SET('fecnac',$_POST['fecnac']);
    $per->__SET('genero',$_POST['genero']);
    $per->__SET('direccion',$_POST['direccion']);
    $per->__SET('tipopersona',"Empleado");
    $empDAO->insertarEmpleado($emp,$per);

    header('Location: registro.php');
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LEANDING PAGE</title>
	<link rel="stylesheet" type="text/css" href="../estilo/menu.css">
</head>
<body>
	<div class="fondo">
	<header class="cabecera">

		<nav class="navegador">
			<span class="titPrinc">bdFarmacia +</span>
			<ul>
				<li><a href="login.php" >LOGIN</a></li>
				<li><a href="registro.php">REGISTRARSE</a></li>
				
			</ul>
		</nav>
	</header>
	<section class="seccion" >
		<article class="articulo">
			<h1>TRABAJO IF FARMACIA</h1>
			<p>Este es nuestro trabajo de Investigación Formativa, teniendo encuenta almacén como nuestro alcance.</p>
		</article>
	</section>
	<aside class="aside" >
		
			<form class="login" action="registro.php" method="post">
			<table align="center">
				<tr>
					<td><input type="text" name="dni" placeholder="DNI"></td>
				</tr>
				<tr>
					<td><input type="text" name="nombres" placeholder="NOMBRES"></td>
				</tr>
				<tr>
					<td><input type="text" name="apellidos" placeholder="APELLIDOS"></td>
				</tr>
				<tr>
					<td><input type="text" name="correo" placeholder="CORREO"></td>
				</tr>
				<tr>
					<td><input type="date" name="fecnac" placeholder="FECHA DE NACIMIENTO"></td>
				</tr>
				<tr>
					<td><select  name="genero">
							<option value="M">MASCULINO</option>
							<option value="F">FEMENINO</option>
						</select>	
					</td>
				</tr>
				<tr>
					<td><input type="text" name="direccion" placeholder="DIRECCION"></td>
				</tr>
				<tr>
					<td><select  name="turno">
							<option value="mañana">MAÑANA</option>
							<option value="tarde">TARDE</option>
						</select></td>
				</tr>
				<tr>
					<td><select  name="especialidad">
							<option value="empleado">QUIMICO</option>
							<option value="transportista">FARMACÉUTICO</option>
						</select></td>
				</tr>
				<tr>
					<td><input type="text" name="usuario" placeholder="USUARIO"></td>
				</tr>
				<tr>
					<td><input type="password" name="clave" placeholder="CLAVE"></td>
				</tr>
				<tr>
					<td><input type="submit" name="guardar" value="REGISTRAR"></td>
				</tr>
			</table>
		</form>
		
		</div>
		
	
		
		
	</aside>
	<footer class="pie">
		EPICS 2018
	</footer>
</div>
</body>
</html>