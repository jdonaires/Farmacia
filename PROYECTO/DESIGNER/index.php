<?php
require_once('BOL/persona.php');
require_once('DAO/personaDAO.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>FarmiSalud</title>
	<link rel="stylesheet" type="text/css" href="estilo/estilo.css">
  <link rel="icon" type="img/jpg" href="img/a.jpg"> <!-- ESTA EDICION SIRVE PARA AGREGAR ICONO AL EMCABEZADO DE LA PAGINA.-->
</head>

<body  class="cajon">
	<nav class="navegador" align="center">
		<span><h1>FarmiSalud</h1></span>
	</nav>
	<form action="buscarpersona.php" method="post" class="formulario" >
		<table >
			<center>
			<img src="img/login.png" >  <!--posicion de Imagen login-->
		   </center>
			<tr >

				<td><input type="text" name="" placeholder="Usuario"  required ></td> <!--Esta edicion se utiliza para que el usuario Ingrese datos al Campo y no lo deje vacio-->
			</tr>
			<tr >

				<td><input type="password" name="" placeholder="Clave"  required ></td>
			</tr>
			<tr>

      </tr>
			<tr>

				<td ><input type="submit" name="" value="INGRESAR" style="width:100%;"  onclick=" location.href='http://localhost:8090/Farmacia/PROYECTO/DESIGNER/menu.php' "></td>

			</tr>


			<td ><input type="submit" value="REGISTRARSE" onclick=" location.href='http://localhost:8090/Farmacia/PROYECTO/DESIGNER/registrarPersona.php' ">
			</td>  <!--ACCESO PARA ENTRAR A LA DIRECCION DEL REGITRO DE EMPLEADO CON ONCLICK-->
		</table>
	</form>
	<?php
	if(isset($_POST['buscar']))
	{
			$resultado = array();//VARIABLE TIPO RESULTADO
			$per->__SET('dni',$_POST['dni']);//ESTABLECEMOS EL VALOR DEL DNI
			$resultado = $perDAO->listarPersona($per); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
			if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
			{
					?>
					<table class="pure-table pure-table-horizontal">
									<thead>
													<tr>

																	<th style="text-align:left;">Nombres</th>
																	<th style="text-align:left;">Apellidos</th>
																	<th style="text-align:left;">DNI</th>
													</tr>
									</thead>
					<?php
					foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
							?>
									<tr>

													<td><?php echo $r->__GET('Nombre'); ?></td>
													<td><?php echo $r->__GET('Apellido'); ?></td>
													<td><?php echo $r->__GET('DNI'); ?></td>
									</tr>
					<?php endforeach;
			}
      else
      {
          /*echo 'Bienvenido A FarmiSalud!';*/
          echo "<script> alert('Bienvenido A FarmiSalud!'); </script>";
      }
			?>
			</table>
			<?php
	}
	?>

</body>
</html>
