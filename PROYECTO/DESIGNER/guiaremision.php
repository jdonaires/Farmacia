<?php
require_once('../BOL/guiaremision.php');
require_once('../DAO/guiaremisionDAO.php');

$guia = new guiaremision();
$guiaDAO = new GuiaRemisionDAO();

if (isset($_POST['guardar']))
{
  $guia->__SET('nroguia', $_POST['nroguia']);
  $guia->__SET('puntopartida', $_POST['puntopartida']);
  $guia->__SET('puntollegada', $_POST['puntollegada']);
  $guia->__SET('fecemision', $_POST['fecemision']);
  $guia->__SET('fecinitraslado', $_POST['fecinitraslado']);
  $guia->__SET('mottraslado', $_POST['mottraslado']);
  $guia->__SET('idtransporte', $_POST['idtransporte']);
  $guiaDAO->Registrar($guia);

  header('Location: guiaremision.php');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<title> Formulario Guia de Remision</title>
	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
  <link rel="icon" type="img/jpg" href="../img/a.jpg">
</head>
<body>
  <div>
  </br>
  	<h1> Registro de Guia Remision</h1>
  </br>
    <form class="contact_form">
    </br>
      <input type="text" style="width : 100 % ;"  placeholder="NroGuia" required="">
      <input type="text" style="width:100 % ;"  placeholder="PuntoPartida" required="">
      <input type="text" style="width:100 % ;"  placeholder="PuntoLlegada" required="">
      <h4>Fecha de Emision</h4>
      <input type="date" style="width:100 % ;"  placeholder="FechaEmision" required="">
      <h4>Fecha Inicio de Traslado</h4>
      <input type="date" style="width:100 % ;"  placeholder="FecInicTraslado" required="">
      <input type="text" style="width:100 % ;"  placeholder="MotivoTraslado" required="">
      <input type="text" style="width:100 % ;"  placeholder="IdTransporte" required="">
      <input type="submit" value="Guardar"  id="button">
      </ul>
    </form>
  </div>
</body>
</html>
