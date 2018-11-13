<?php
	require_once('../BOL/factura.php');
	require_once('../DAO/facturaDAO.php');

	$fac = new factura();
	$facDAO = new facturaDAO();

	if (isset($_POST['guardar']))
	{
			$fac->__SET('iddetallegm', $_POST['iddetallegm']);
			$fac->__SET('costounitario', $_POST['costounitario']);
			$fac->__SET('costototal', $_POST['costototal']);
			$fac->__SET('igv', $_POST['igv']);
			$fac->__SET('subtotal', $_POST['subtotal']);
			$facDAO->Registrar($fac);

			header('Location: registrarfactura.php');
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario para Factura</title>
	<link rel="stylesheet" type="text/css" href="../estilo/registrarfactura.css">
</head>
<body>
  <div>
		<br>
  	<h1>Registrar Factura</h1>
    <form class="contact_form">
			</br>
				<input type="text" style="width : 100 % ;"  placeholder="Codigo - Detalle Medidamento" required>

        <input type="submit" value="Guardar"  id="boton">

    </form>
  </div>
</body>
</html>
