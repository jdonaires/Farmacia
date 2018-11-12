<?php
require_once('../BOL/empleado.php');
require_once('../DAO/empleadoDAO.php');

$emp=new Empleado();
$empDAO=new EmpleadoDAO();

if (isset($_POST['guardar'])) {
    $emp->__SET('dni', $_POST['dni']);
    $emp->__SET('turno',$_POST['turno']);
    $emp->__SET('especialidad',$_POST['especialidad']);
    $emp->__SET('clave', $_POST['clave']);
    $emp->__SET('usuario', $_POST['usuario']);
    $empDAO->listarEmpleado($per);

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
  		<form class="form__reg" action="">
              <input class="input-50" type="text" placeholder="DNI" required autofocus>
   			      <input class="input-100" type="text" placeholder="Turno" required autofocus>
              <input class="input-100" type="tex" placeholder="Especialidad" required autofocus>
              <input class="input-50" type="password" placeholder="Clave" required>
              <input class="input-50" type="text" placeholder="usuario" required>
              <div class="btn__form">
              	<input class="btn__submit" type="submit" value="REGISTRAR">
              	<input class="btn__reset" type="reset" value="LIMPIAR">
              </div>
  		</form>
  	</div>
  </body>
</html>
