<?php
	require_once('../BOL/laboratorio.php');
	require_once('../DAO/laboratorioDAO.php');
	require_once('../BOL/empresa.php');
	require_once('../DAO/empresaDAO.php');
  $emp = new empresa();
	$empDAO = new empresaDAO();
	$lab = new laboratorio();
	$labDAO = new laboratorioDAO();

	if (isset($_POST['guardar']))
	{
		    $emp->__SET('RUC', $_POST['RUC']);
				$emp->__SET('RazonSocial', $_POST['razonsocial']);
				$emp->__SET('Telefono',$_POST['telefono']);
				$emp->__SET('Direccion',$_POST['direccion']);
				$emp->__SET('TipoEmpresa','Laboratorio');


		    $lab->__SET('RUC', $_POST['RUC']);
				$lab->__SET('RegSanitario', $_POST['RegSanitario']);

     $empDAO->insertarEmpresa($emp);
			$labDAO->Registrar($lab);

			header('Location: registrarLaboratorio.php');
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
    <form class="contact_form">
		</br>

			<input type="text" style="width : 100 % ;"  placeholder="RUC"  name="ruc" required>

			<input type="text" style="width : 100 % ;"  placeholder="Razon Social"  name="razonsocial" required>

			<input type="text" style="width : 100 % ;"  placeholder="Telefono"  name="telefono" required>

			<input type="text" style="width : 100 % ;"  placeholder="direccion"  name="direccion" required>

			<input type="text" style="width : 100 % ;"  placeholder="Numero de Registro Sanitario" name="RegSanitario"  required >

				<input type="submit" id="button" value="Guardar" name="guardar" />

    </form>
  </div>
</body>
</html>
