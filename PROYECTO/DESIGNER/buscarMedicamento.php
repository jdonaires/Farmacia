<?php
require_once('../BOL/medicamento.php');
require_once('../DAO/medicamentoDAO.php');

$med = new Medicamento();
$medDAO = new MedicamentoDAO();
?>
<!DOCTYPE html>
<html>
  <head>

  	<title> Formulario para Buscar Medicamento</title>

  	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
  </head>
  </head>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <body>
  		</br>
  			<h1>Buscar Medicamento</h1>
  		</br>
  	 <form action="buscarmedicamento.php" method="post" class="formulario" >

  	 </br>
          <input type="text" name="codmed" value=""  placeholder="Ingrese Codigo"  required style="width:100%;" />
                  <!--Esta edicion se utiliza para que el usuario Ingrese datos al Campo y no lo deje vacio-->
          <input type="submit" value="BUSCAR" name="buscar" id="button" class="pure-button pure-button-primary" style="width:100%">

    </form>
</html>
