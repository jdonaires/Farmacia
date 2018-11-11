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

    header('Location: registrarmedicamento.php');
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario para Medicamento</title>
	        <link rel="stylesheet" type="text/css" href="../estilo/frmMedicamento.css">
</head>
<body style="padding:15px;" class="cajon">
  <div>

    <form action="registrarmedicamento.php" method="post" class="formulario" id="form2" name="form">
      <font face="Comic Sans MS,arial,verdana" size=6> Registrar Medicamento</font>
      <table border="0">
        <tr>
          <td><input type="text" name="codMedicamento" style="width:30%" placeholder="Codigo"></td>
        </tr>
        <tr>
          <td><input type="text" name="Nombre" style="width:70%" placeholder="Nombre"></td>
        </tr>
        <tr>
          <td>
            <input type="text" name="NomLaboratorio"  placeholder="Laboratorio">
            <input type="text" name="IDLaboratorio" placeholder="ID">
          </td>
        </tr>
        <tr>
            <td>
              <input type="submit" value="Guardar">
            </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
