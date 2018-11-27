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
	<title>FARMISALUD</title>
	<link rel="stylesheet" type="text/css" href="../estilo/menu.css">
	<link rel="icon" type="image/png" href="../img/icon.png" />
</head>
<body>
	<div class="fondo">
	<header class="cabecera">

		<nav class="navegador">
			<span class="titPrinc">bdFarmacia +</span>
			<span class="referencia"><a href=""><img src="../img/log_white.png"></a></span>
			</a>
			<ul class="lista">
				
				<li><a href="login.php" >LOGIN</a></li>
				<li><a href="registro.php">REGISTRARSE</a></li>
				
			</ul>
		</nav>
	</header>
	<section class="seccion" >
		<article class="articulo">
			
			<h1>TRABAJO IF FARMACIA</h1>
			<p>Este es nuestro trabajo de Investigación Formativa, teniendo encuenta almacén como nuestro alcance.</p>
			<img src="../img/logo.png">
		</article>

	</section>
	<aside class="aside" >
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>

			<form class="login" action="login.php" method="post">
			<table align="center">
				<tr>
					<td><input type="text" name="usuario" placeholder="USUARIO"></td>
				</tr>
				<tr>
					<td><input type="password" name="contrasenia" placeholder="CLAVE"></td>
				</tr>
				<tr>
					<td><input type="submit" name="ingresar" value="LOGIN"></td>
				</tr>
			</table>
		</form>
		
		</div>
		
	
		
		
	</aside>
	<footer class="pie">
		EPICS 2018
	</footer>
	<?php
				if(isset($_POST['ingresar']))
				{
					$resultado = array();//VARIABLE TIPO RESULTADO
					$log->__SET('usuario',          $_POST['usuario']);//ESTABLECEMOS EL VALOR DEL DNI
					$log->__SET('clave',          $_POST['contrasenia']);//ESTABLECEMOS EL VALOR DEL DNI
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
						echo '<center>USUARIO NO REGISTRADO';
					}
					?>
					</table>
					<?php
				}
				?>

</div>
</body>
</html>