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
	<title> Formulario Guia de Remision</title>
	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
</head>
<body>
  <div>
  	<h1>Guia Remision</h1>
    <form class="contact_form">
    	<ul>
    	 <li><span for="NroGuia">Nro Guia:</span><input type="text" style="width : 100 % ;"  placeholder=""></li>
       <li><span for="PPartida">Punto Partida:</span><input type="text" style="width:100 % ;"  placeholder=""></li>
       <li><span for="PLlegada">Punto Llegada:</span><input type="text" style="width:100 % ;"  placeholder=""></li>
        <input type="submit" value="Guardar"  id="boton">
    	</ul>
    </form>
  </div>
</body>
</html>
