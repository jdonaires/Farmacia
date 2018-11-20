<?php
require_once('../BOL/empleado.php');
require_once('../DAO/empleadoDAO.php');
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

$emp=new empleado();
$empDAO=new empleadoDAO();
$per = new persona();
$perDAO = new personaDAO();


if (isset($_POST['guardar'])) {
  $per->__SET('dni', $_POST['dni']);
  $per->__SET('nombre',$_POST['nombre']);
  $per->__SET('apellido',$_POST['apellido']);
  $per->__SET('correo', $_POST['correo']);
  $per->__SET('genero', $_POST['genero']);
  $per->__SET('fecnac', $_POST['fecnac']);
  $per->__SET('direccion', $_POST['direccion']);
  $per->__SET('tipopersona', $_POST['Empleado']);


    $emp->__SET('dni', $_POST['dni']);
    $emp->__SET('turno',$_POST['turno']);
    $emp->__SET('especialidad',$_POST['especialidad']);
    $emp->__SET('clave', $_POST['clave']);
    $emp->__SET('usuario', $_POST['usuario']);

    $empDAO->insertarEmpleado($emp,$per);

    header('Location: registrarEmpleado.php');
}
 ?>

 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro de Empleados</title>
    <link rel="stylesheet" href="../estilo/frmempleado.css">
  </head>
  <body>
    <div class="container">
  		<div class="form__top">
  			<h1>Formulario <span>Registro de Empleados</span></h1>
  		</div>
  		<form class="form__reg" action="registrarEmpleado.php" method="post" >
              <input class="input-50" type="text" placeholder="DNI"  name="dni "required autofocus><br>
              <input class="input-50" type="Nombre" placeholder="Nombres" name="nombre" required autofocus><br>
              <input class="input-50" type="Apellido" placeholder="Apellidos"   name="apellido" required autofocus><br>
              <input class="input-50" type="Correo" placeholder="Correo"    name="correo" required autofocus><br>
              <input class="input-50" type="date"  name="fecnac" required autofocus><br>

              <select class="input-100" class="" name="genero">
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>

              </select><br><br>
              <input class="input-50" type="Direccion" placeholder="Direccion"  name="direccion"  required autofocus><br>

              <select class="input-100"  name="turno">
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
              </select><br><br>
              <input class="input-100" type="tex" placeholder="especialidad" required><br>
              <input class="input-50" type="text" placeholder="usuario" required><br>
              <input class="input-50" type="password" placeholder="clave" required><br>
              <div class="btn__form">
              	<input class="btn__submit" type="submit" value="Guardar" name=guardar""><br>
              	<input class="btn__reset" type="reset" value="LIMPIAR">
              </div>
  		</form>
  	</div>
  </body>
</html>
