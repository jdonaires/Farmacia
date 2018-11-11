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
	<title>Formulario de Componentes</title>
	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
</head>
<body>
  <div>
	</br>
  	<h1>COMPONENTES</h1>
    <form class="contact_form">
		</br>
    	<input type="text" style="width : 100 % ;"  placeholder="CodDetMedida">

      <input type="text" style="width : 100 % ;"  placeholder="Nombre" >

			<input type="text" style="width : 100 % ;"  placeholder="Tipo" >

			<input type="text" style="width : 100 % ;"  placeholder="Cantidad" >

			<input type="text" style="width : 100 % ;"  placeholder="CodUniMedida">

			<input type="submit" id="button" value="Guardar" />

    </form>
  </div>
</body>
</html>
