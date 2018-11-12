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
	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
</head>
<body>
  <div>
  	<h1>Registrar Laboratorio</h1>
    <form class="contact_form">
    	<ul>
    		<li><label for="IdLaboratorio">IdLaboratorio:</label><input type="text" style="width : 100 % ;"  placeholder=""></li>
    		<li><label for="RUC">IdLaboratorio:</label><input type="text" style="width : 100 % ;"  placeholder=""></li>
    		<li><label for="RegSanitario">RegSanitario:</label><input type="text" style="width : 100 % ;"  placeholder=""></li>
        <input type="submit" value="Guardar"  id="boton">
    	</ul>
    </form>
  </div>
</body>
</html>

</body>
</html>