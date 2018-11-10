<?php
  require_once('../BOL/medicamento.php');
  require_once('../DAO/medicamentoDAO.php');

  $medi = new medicamento();
  $mediDAO = new medicamentoDAO();

  if (isset($_POST['guardar']))
  {
    $medi->__SET('codmed', $_POST['codmed']);
    $medi->__SET('nombre', $_POST['nombre']);
    $medi->__SET('nombrelaboratorio', $_POST['nombrelaboratorio']);
    $medi->__SET('idlaboratorio', $_POST['idlaboratorio']);
    $mediDAO->Registrar($medi);

    header('Location: medicamento.php');
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
</head>
<body>
  <div>
  	<h1>FMedicamento</h1>
    <form class="contact_form">
    	<ul>
    		<li><label for="codMedicamento">Codigo:</label><input type="text" style="width : 100 % ;"  placeholder=""></li>
    		<li><label for="Nombre">Nombre:</label><input type="text" style="width : 100 % ;"  placeholder="" ></li>
    		<li><label for="NomLaboratorio">NomLaboratorio:</label><input type="text" style="width : 100 % ;"  placeholder="" ></li>
        <li><label for="IDLaboratorio">IDLaboratorio:</label><input type="text" style="width : 100 % ;"  placeholder="" ></li>
        <input type="submit" value="Guardar"  id="boton">
    	</ul>
    </form>
  </div>
</body>
</html>