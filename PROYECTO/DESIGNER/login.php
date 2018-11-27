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
	 <meta charset="utf-8">
	<title>FARMISALUD</title>
	<link rel="stylesheet" type="text/css" href="../estilo/menu.css">
	<link rel="icon" type="image/png" href="../img/icon.png" />
</head>
<body>
	<div class="fondo">
	<header class="cabecera">

		<nav class="navegador">
			<span class="titPrinc">bdFarmacia +</span>
			<span class="referencia"><img src="../img/log_white.png"></span>
			
			<ul class="lista">
				
				<li><a href="login.php" >LOGIN</a></li>
				<li><a href="registro.php">REGISTRARSE</a></li>
				
			</ul>
		</nav>
	</header>
	<section class="seccion" >
		<article class="articulo">
			
			<img src="../img/logo_white.png">
			<br>
			<h1>TRABAJO IF FARMACIA</h1>
			<p>
			El presente trabajo fue creado considerando las breves pautas de nuestro docente Juán Moisés Donayrez Ruiz, en el cual también hemos sido partícipes los compañeros: <br><br>
			- Matías Saravia, Erick Stalin <br>
			- Cuadros Lévano, Yorman Piero <br>
			- Gonzales Cabrera, Miriam	<br>
			- Yataco Blas, Juan Moisés	<br>
			- Vergara Chacaliaza, Flavio	<br>
			- Guerra Choque, Cristopher	<br>
			- Amoretti Saravia, Jhair	<br>
			- Geldres Huaycochea, Geldres	<br>
			- Hernández Elías, Juán	<br>
			- Guerra Huarcaya, Richard	<br>
			- Bendezú Yarasca, Aldair	<br>
			- Alvarez Tataje, José	<br>
			- Carbajal Gonzales, Francesca	<br>
			- Flores Balarezo, Sugei	<br><br>
			Esperamos que este aporte sirva de mucho para nuestros usuarios.
		</p>
			
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
		<p class="text">	EPICS 2018</p>
	
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