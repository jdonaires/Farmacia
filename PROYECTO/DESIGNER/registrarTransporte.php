<?php
	require_once('../BOL/transporte.php');
	require_once('../DAO/transporteDAO.php');
	require_once('../BOL/empresa.php');
	require_once('../DAO/empresaDAO.php');
  $emp = new empresa();
	$empDAO = new empresaDAO();
	$tra = new transporte();
	$traDAO = new transporteDAO();

	if (isset($_POST['guardar']))
	{
		    $emp->__SET('RUC', $_POST['ruc']);
				$emp->__SET('RazonSocial', $_POST['razonsocial']);
				$emp->__SET('Telefono',$_POST['telefono']);
				$emp->__SET('Direccion',$_POST['direccion']);
				$emp->__SET('TipoEmpresa','Laboratorio');


		    $tra->__SET('RUC', $_POST['ruc']);
				$tra->__SET('Placa', $_POST['placa']);

      $empDAO->insertarEmpresa($emp);
			$traDAO->transporte($tra);

			header('Location: registrarTransporte.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario para Laboratorio</title>
		<link rel="icon" type="img/jpg" href="../img/a.jpg">
		<link rel="stylesheet" type="text/css" href="../estilo/frmlaboratorio.css">
</head>
<body>
  <div>
		<br>
  	<h1>Registrar un Laboratorio</h1>
    <form action="registrarTransporte.php" method="post"  class="contact_form">
		</br>

			<input type="text" style="width : 100 % ;"  placeholder="RUC"  name="ruc" required>

			<input type="text" style="width : 100 % ;"  placeholder="Razon Social"  name="razonsocial" required>

			<input type="text" style="width : 100 % ;"  placeholder="Telefono"  name="telefono" required>

			<input type="text" style="width : 100 % ;"  placeholder="direccion"  name="direccion" required>

			<input type="text" style="width : 100 % ;"  placeholder="Placa" name="placa"  required >

				<input type="submit" id="button" value="Guardar" name="guardar" />

    </form>
  </div>
</body>
</html>
