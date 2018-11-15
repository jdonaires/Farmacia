<?php
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>FarmiSalud</title>
	<link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
  <link rel="icon" type="img/jpg" href="../img/a.jpg"> <!-- ESTA EDICION SIRVE PARA AGREGAR ICONO AL EMCABEZADO DE LA PAGINA.-->
</head>

<body  class="cajon">
	
	

                <form action="login.php" method="post" class="formulario" style="margin-bottom:30px;">

                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">USUARIO</th>
                            <td><input type="text" name="usuario" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">CONTRASE&NtildeA</th>
                            <td><input type="text" name="contrasenia" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
								<input type="submit" value="INGRESAR" name="ingresar"class="pure-button pure-button-primary">
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>

				<!--ESTA CONDICION SIRVE PARA REALIZAR BUSQUEDA POR DNI-->

				<?php
				if(isset($_POST['ingresar']))
				{
					$resultado = array();//VARIABLE TIPO RESULTADO
					$log->__SET('usuario',          $_POST['usuario']);//ESTABLECEMOS EL VALOR DEL DNI
					$log->__SET('contrasenia',          $_POST['contrasenia']);//ESTABLECEMOS EL VALOR DEL DNI
					$resultado = $perDAO->registrarse($log); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
					if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
					{
						?>
						<table class="pure-table pure-table-horizontal">
								<thead>
										<tr>
												<th style="text-align:left;">DNI</th>
												<th style="text-align:left;">APELLIDOS Y NOMBRES</th>
										</tr>
								</thead>
						<?php
						foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
							?>
								<tr>
										<td><?php echo $r->__GET('dni'); ?></td>
										<td><?php echo $r->__GET('nombres'); ?></td>
								</tr>
						<?php endforeach;
					}
					else
					{
						echo 'no se encuentra en la base de datos!';
					}
					?>
					</table>
					<?php
				}
				?>

</body>
</html>
