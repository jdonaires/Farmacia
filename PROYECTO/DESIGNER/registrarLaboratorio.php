<?php
	require_once('../BOL/laboratorio.php');
	require_once('../DAO/laboratorioDAO.php');

	$lab = new laboratorio();
	$labDAO = new laboratorioDAO();

	if (isset($_POST['guardar']))
	{
		    $lab->__SET('RUC', $_POST['RUC']);
			$lab->__SET('IdLaboratorio', $_POST['IdLaboratorio']);
			$lab->__SET('RegSanitario', $_POST['RegSanitario']);

			$labDAO->Registrar($lab);

			header('Location: registrarLaboratorio.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario para Laboratorio</title>
<<<<<<< HEAD
		<link rel="stylesheet" type="text/css" href="../estilo/frmlaboratorio.css">
</head>
<body>
  <div>
		<br>
  	<h1>Registrar un Laboratorio</h1>
    <form class="contact_form">
		</br>
				<input type="text" style="width : 100 % ;"  placeholder="Id Laboratorio" required>

				<input type="text" style="width : 100 % ;"  placeholder="Id Laboratorio" required>

				<input type="text" style="width : 100 % ;"  placeholder="Numero de Registro Sanitario" required >

				<input type="submit" id="button" value="Guardar" />
=======
	<link rel="icon" type="img/jpg" href="../img/a.jpg">
	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
</head>
<body>
  <div>
	</br>
  	<h1>Registrar Laboratorio</h1>
    <form class="contact_form">

		<input type="text" style="width : 100 % ;"  placeholder="IdLaboratorio" required="">

		<input type="text" style="width : 100 % ;"  placeholder="IdLaboratorio" required="">

		<input type="text" style="width : 100 % ;"  placeholder="RegSanitario" required="">

		<input type="submit" value="Guardar"  id="button">
	</br>
>>>>>>> 734cad188316679e29338f909e3c0b3c4e9f8a45
    </form>
  </div>
</body>
</html>
<<<<<<< HEAD
=======

</body>
</html>
>>>>>>> 734cad188316679e29338f909e3c0b3c4e9f8a45
