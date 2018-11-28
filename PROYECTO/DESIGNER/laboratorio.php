<?php
require_once('../BOL/Laboratorio.php');
require_once('../BOL/empresa.php');
require_once('../DAO/laboratorioDAO.php');

$lab = new Laboratorio();
$empDAO = new transporteDAO();
$emp = new empresa();
if (isset($_POST['guardar'])) {
    $lab->__SET('ruc', $_POST['ruc']);
    $lab->__SET('IdLaboratorio',$_POST['IdLaboratorio']);
    $lab->__SET('regsanitario',$_POST['regsanitario']);
    $emp->__SET('ruc',$_POST['ruc']);
    $emp->__SET('razonsocial', $_POST['razonsocial']);
    $emp->__SET('telefono', $_POST['telefono']);
    $emp->__SET('direccion',$_POST['direccion']);
    $emp->__SET('tipoempresa',$_POST['tipoempresa']);

    $empDAO->insertarTransporte($lab,$emp);

    header('Location: laboratorio.php');
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
header{
  background: #202E37;
    color: white;
}
nav{
  background:#202E37;
  color: white;

}
.cuerpo{
  margin-top:110px;
}
</style>
<body>
  <header>

    <nav class="navbar navbar-fixed-top ">
<div class="container">
  <h2><span class="glyphicon glyphicon-fire"> </span > Registrar Laboratorio</h2>
<ul class="nav nav-pills">
  <li role="presentation"><a href="inicio.php">Inicio</a></li>
</ul>

</div>
    </nav>

  </header>

 <section class="main">
   <BR>

<form class="form-horizontal" action="empleado.php" method="post">
<div class=" container cuerpo">
  <div class="row">
<div class="col-md-6">
  <div class="panel panel-primary">
  <div class="panel-heading"><h3>Laboratorio</h3></div>
  <div class="panel-body">
  <div class="row ">
     <div class="form-group 	">
      <label class="control-label col-md-3">RUC:</label>
      <div class="col-md-5 has-success">
       <input  class =" form-control " type="text" name="dni" placeholder="DNI" required >
     </div>
        <div  class="col-md-3 ">
          <button class="btn btn-primary btn-block">Agregar</button>
        </div>
     </div>
    <div class="form-group ">
     <label class="control-label col-md-3" >Razon Social:</label>
     <div class="col-md-5 has-success">
     <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
     </div>
     <div  class="col-md-3 ">
       <button class="btn btn-primary btn-block">Eliminar</button>
     </div>
   </div>
   <div class="form-group ">
    <label class="control-label col-md-3" >Telefono:</label>
    <div class="col-md-5 has-success">
    <input type="text" name="telefono" class="form-control" placeholder="Nombres" required>
    </div>
    <div  class="col-md-3 ">
      <button class="btn btn-primary btn-block">Modificar</button>
    </div>
  </div>
  <div class="form-group ">
   <label class="control-label col-md-3" >Direccion:</label>
   <div class="col-md-5 has-success">
   <input type="text" name="direccion" class="form-control" placeholder="Nombres" required>
   </div>

 </div>
   <div class="form-group ">
    <label class="control-label col-md-3" >Registro Sanitario:</label>
    <div class="col-md-5 has-success">
    <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
    </div>

  </div>






  </div>
  </div>
</div>
</div>
<div class="col-md-6">


<div class="panel panel-primary">
<div class="panel-heading"><h3>Buscar</h3></div>
<div class="panel-body">
<div class="row ">

   <div class="form-group 	">
    <label class="control-label col-md-2">RUC:</label>
    <div class="col-md-5 has-success">
     <input  class =" form-control " type="text" name="dni" placeholder="RUC" required >
   </div>
      <div  class="col-md-4 ">
        <button class="btn btn-primary btn-block">Buscar</button>
      </div>
   </div>





</div>
</div>
</div>
</div>
  </div>

</form>


</section>



</body>
</html>
