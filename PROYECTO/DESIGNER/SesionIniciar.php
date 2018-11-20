<?php
require_once('../BOL/persona.php');
require_once('../BOL/login.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();
$log = new Login();

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CRUD</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">

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
																<!--input type="submit" value="GUARDAR" name="guardar"class="pure-button pure-button-primary"-->
																<input type="submit" value="INICIAR SESION" name="ingresar"class="pure-button pure-button-primary">
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
						session_start();//APERTURAMOS UNA SESSION
						foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
							?>
								<tr>
										<td><?php echo $r->__GET('dni'); ?></td>
										<td><?php echo $r->__GET('nombres'); ?></td>
								</tr>
								<?php $_SESSION['dni']= $r->__GET('dni'); ?>
								<?php $_SESSION['apellidos_y_nombres']= $r->__GET('nombres'); ?>
						<?php endforeach;

						$_SESSION['ultimo_ingreso']= date("Y-n-j H:i:s");
						header('location:../DESIGNER/Inicio.php');
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
