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
	<form class="formulario">
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
			 <select name="tipopersona" >
      			<option value="Empleado">Empleado</option>
            <option value="Transportista">Transportista</option>
       </select>
      </tr>
			<tr>

				<td ><input type="submit" name="" value="INGRESAR" style="width:100%;"  onclick=" location.href='http://localhost:8090/Farmacia/PROYECTO/DESIGNER/menu.php' "></td>

			</tr>


			<td ><input type="submit" value="REGISTRARSE" onclick=" location.href='http://localhost:8090/Farmacia/PROYECTO/DESIGNER/registrarPersona.php' ">
			</td>  <!--ACCESO PARA ENTRAR A LA DIRECCION DEL REGITRO DE EMPLEADO CON ONCLICK-->
		</table>
	</form>
</body>
</html>
