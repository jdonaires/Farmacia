<?php
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
 	<link rel="stylesheet" type="text/css" href="../estilo/menu.css">
 	<Script Language="JavaScript">
    function DameLaFechaHora() {
      var hora = new Date()
      var hrs = hora.getHours();
      var min = hora.getMinutes();
      var hoy = new Date();
      var m = new Array();
      var d = new Array()
      var an= hoy.getYear();
      m[0]="Enero";  m[1]="Febrero";  m[2]="Marzo";
      m[3]="Abril";   m[4]="Mayo";  m[5]="Junio";
      m[6]="Julio";    m[7]="Agosto";   m[8]="Septiembre";
      m[9]="Octubre";   m[10]="Noviembre"; m[11]="Diciembre";
      document.write(hrs+":"+min+" , ");
      document.write(hoy.getDate());
      document.write(" de ");
      document.write(m[hoy.getMonth()]);
      document.write(" ");
    }
  </Script>
 </head>
 <body>
 	<div class="title">
 		<span > MENU PRINCIPAL</span>
 	</div>

 	<div class="infoUsuario">
 		<span>EMPLEADO: PERSONA A</span><br>
 		<span>FECHA:<script>
    DameLaFechaHora();
  </script> </span>
 	</div>
 	<table>
 		<tr class="titlemenu" >
 			<td colspan="3">
 				MEDICAMENTO
 			</td>
 		</tr>
 		<tr>

 			<td>
 				<div class="caja">
 					<a href="registrarmedicamento.php">
 						<img src="https://www.flaticon.es/premium-icon/icons/svg/1048/1048568.svg" class="icon">
 					</a>AGREGAR MEDICAMENTO
 				</div>
 			</td>
 			<td><div class="caja"><a href="">
        <img src="https://www.flaticon.es/premium-icon/icons/svg/1048/1048610.svg" class="icon">
 			</a>CONSULTAR MEDICAMENTO</div></td>
 			<td><div class="caja"><a href="">
        <img src="https://image.flaticon.com/icons/svg/1048/1048576.svg" class="icon">
 			</a>LISTAR MEDICAMENTO</div></td>
 		</tr>
 		<tr class="titlemenu" >
 			<td colspan="3">
 				EMPLEADO
 			</td>
 		</tr>
 		<tr>

 			<td class="col">
 				<div class="caja">
 					<a href="registrarPersona.php">
 						<img src="https://image.flaticon.com/icons/svg/1201/1201194.svg" class="icon">
 					</a>AGREGAR EMPLEADO
 				</div>
 			</td>
 			<td class="col">
 				<div class="caja">
 					<a href="buscarpersona.php">
 						<img src="https://image.flaticon.com/icons/svg/1201/1201169.svg" class="icon">
 					</a>CONSULTAR EMPLEADO
 				</div>
 			</td>
 			<td class="col">
 				<div class="caja">
 					<a href="">
 						<img src="https://image.flaticon.com/icons/svg/1201/1201197.svg" class="icon">
 					</a>LISTAR EMPLEADO
 				</div>
 			</td>

 		</tr>
 		<tr class="titlemenu" >
 			<td colspan="3">
 				GUIA DE REMISION
 			</td>
 		</tr>
 		<tr>

 			<td class="col">
 				<div class="caja">
 					<a href="guiaremision.php">
 						<img src="https://image.flaticon.com/icons/svg/129/129488.svg" class="icon">
 					</a>AGREGAR GUIA DE REMISIÓN
 				</div>
 			</td>
 			<td class="col">
 				<div class="caja">
 					<a href="">
 						<img src="https://image.flaticon.com/icons/svg/129/129491.svg" class="icon">
 					</a>CONSULTAR GUIA DE REMISIÓN
 				</div>
 			</td>
 			<td class="col">
 				<div class="caja">
 					<a href="">
 						<img src="https://image.flaticon.com/icons/svg/129/129473.svg" class="icon">
 					</a>LISTAR GUIA DE REMISIÓN
 				</div>
 			</td>

 		</tr>



 	</table>
 </body>
 </html>
