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
	else
	{
			/*echo 'PROCESO AL REGISTRO DE FACTURA!';*/
			echo "<script> alert('PROCESO AL REGISTRO DE FACTURA!'); </script>";
	}


// Estas condicionales son para las palabras con tildes y la letra ñ //

	// Modificamos las variables pasadas por URL
foreach( $_GET as $variable => $valor ){
$_GET [ $variable ] = str_replace ( "'" , "" , $_GET [ $variable ]);
$_GET [ $variable ] = str_replace ( "\"" , "" , $_GET [ $variable ]);
}
// Modificamos las variables de formularios
foreach( $_POST as $variable => $valor ){
$_POST [ $variable ] = str_replace ( "'" , "" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "\"" , "" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "á" , "&aacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "é" , "&eacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "í" , "&iacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "ó" , "&oacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "ú" , "&uacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "Á" , "&Aacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "É" , "&Eacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "Í" , "&Iacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "Ó" , "&Oacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "Ú" , "&Uacute;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "ñ" , "&ntilde;" , $_POST [ $variable ]);
$_POST [ $variable ] = str_replace ( "Ñ" , "&Ntilde;" , $_POST [ $variable ]);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
	<title>Formulario para Factura</title>
	<link rel="icon" type="img/jpg" href="../img/a.jpg">
	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
</head>
<body>
  <div>
	</br>
  	<h1>Registrar Factura</h1>
    <form class="contact_form">
			</br>
				<input type="text" style="width : 100 % ;"  placeholder="Codigo Factura" required="">
        <input type="submit" value="Guardar"  id="button">

    </form>
  </div>
</body>
</html>
