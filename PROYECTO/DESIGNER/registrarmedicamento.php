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
	        <link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
</head>
<body style="padding:15px;" class="cajon">
  <div id="contenedor-inputs">

    <form action="registrarmedicamento.php" method="post" class="formulario" name="form"> Registrar Medicamento</font>

      <table border="0" class="cajon" name="table">
        <tr>
          <td><input type="text" name="codMedicamento" style="width:30%" placeholder="Codigo" required></td>
        </tr>
        <tr>
          <td><input type="text" name="Nombre" style="width:70%" placeholder="Nombre" required></td>
        </tr>
        <tr>
          <td>
            <input type="text" name="NomLaboratorio"  placeholder="Laboratorio"required>
            <input type="text" name="IDLaboratorio" placeholder="ID" required>
          </td>
        </tr>
        <tr>
            <td>
              <input type="submit" value="Guardar" class="btn-Guardar" align="center" required>
            </td>
        </tr>
      </table>



    </form>

</form>
  </div>
</body>
</html>
