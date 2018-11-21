<?php
require_once('../BOL/persona.php');
require_once('../BOL/empleado.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();
$log = new empleado();

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>CRUD</title>
        <link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
	</head>
    <body class="cajon">
			<nav class="navegador" align="center">
				<span><h1>FarmiSalud</h1></span>
			</nav>

                <form action="sesioniniciar.php" method="post" class="formulario" >

                    <table >
											<center>
											<img src="../img/login.png" >  <!--posicion de Imagen login-->
										   </center>
                        <tr>

                            <td><input type="text" name="usuario" value=""  placeholder="Usuario"/></td>
                        </tr>
                        <tr>

                            <td><input type="text" name="contrasenia" value=""  placeholder="Clave"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">

																<input type="submit" value="INICIAR SESION" name="ingresar" >
                            </td>
                        </tr>
                    </table>
                </form>


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
										<td><?php echo $r->__GET('nombre'); ?></td>
								</tr>
								<?php $_SESSION['dni']= $r->__GET('dni'); ?>
								<?php $_SESSION['apellidos_y_nombres']= $r->__GET('nombre'); ?>
						<?php endforeach;

						$_SESSION['ultimo_ingreso']= date("Y-n-j H:i:s");
						header('location:../designer/Inicio.php');
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
