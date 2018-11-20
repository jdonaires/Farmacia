<?php
require_once('../BOL/empleado.php');
require_once('../DAO/EmpleadoDAO.php');

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
              <input class="input-50" type="text" placeholder="DNI" required autofocus><br>

              <select class="input-100" class="" name="">
                <option value="Mañana">Mañana</option>
                <option value="Tarde">Tarde</option>
                <option value="Noche">Noche</option>
              </select><br><br>
              <input class="input-100" type="tex" placeholder="Especialidad" required><br>
              <input class="input-50" type="password" placeholder="Clave" required><br>
              <input class="input-50" type="text" placeholder="usuario" required><br>
              <div class="btn__form">
              	<input class="btn__submit" type="submit" value="REGISTRAR"><br>
              	<input class="btn__reset" type="reset" value="LIMPIAR">
              </div>
  		</form>
  	</div>
  </body>
</html>
