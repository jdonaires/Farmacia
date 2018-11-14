<?php
	require_once('../BOL/componentes.php');
	require_once('../DAO/componentesDAO.php');

	$compo = new componentes();
	$compoDAO = new componentesDAO();

	if (isset($_POST['guardar']))
	{
		$compo->__SET('coddtMedicamento', $_POST['coddtMedicamento']);
		$compo->__SET('nombre', $_POST['nombre']);
		$compo->__SET('tipo', $_POST['tipo']);
		$compo->__SET('cantidad', $_POST['cantidad']);
		$compo->__SET('codunimedida', $_POST['codunimedida']);
		$compoDAO->Registrar($compo);

		header('Location: FComponentes.php');
	}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<title>Componentes de Medicamentos</title>

	<title>Formulario de Componentes</title>

	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
	<link rel="icon" type="img/jpg" href="../img/a.jpg">
</head>
<body>
  <div>
	</br>
  	<h1>COMPONENTES DE MEDICAMENTOS</h1>
    <form class="contact_form">
		</br>
    	<input type="text" style="width : 100 % ;"  placeholder="Codigo - Detalle Medidamento" required>

      <input type="text" style="width : 100 % ;"  placeholder="Nombre del Medicamento" required>

			<input type="text" style="width : 100 % ;"  placeholder="Tipo" required >

			<input type="text" style="width : 100 % ;"  placeholder="Cantidad"required >

			<input type="text" style="width : 100 % ;"  placeholder="Unidad de Medida" required>

			<input type="submit" id="button" value="Guardar" />

    </form>
  </div>
</body>
</html>
