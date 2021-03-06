<?php
require_once('../BOL/transportista.php');
require_once('../BOL/persona.php');
require_once('../DAO/transportistaDAO.php');

$tran = new transportista();
$tranDao = new transportistaDAO();
$per = new persona();

if (isset($_POST['guardar'])) {
    $tran->__SET('dni', $_POST['dni']);
    $tran->__SET('$idtransporte',$_POST['$idtransporte']);
    $tran->__SET('nrolicencia',$_POST['nrolicencia']);

    $per->__SET('dni',$_POST['dni']);
    $per->__SET('nombre',$_POST['nombre']);
    $per->__SET('apellido',$_POST['apellido']);
    $per->__SET('correo',$_POST['correo']);
    $per->__SET('fecnac',$_POST['fecnac']);
    $per->__SET('genero',$_POST['genero']);
    $per->__SET('direccion',$_POST['direccion']);
    $per->__SET('tipopersona',"Transportista");
    $tranDao->insertarTransportista($tran,$per);

    header('Location: transportista.php');
}


 ?>
   <html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registrar Transportista</title>
  <link rel="icon" type="image/png" href="../img/icon.png" />
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
<script type="text/javascript" src="../js/funciones.js"></script>
<body>
  <header>

    <nav class="navbar navbar-fixed-top ">
<div class="container">
  <h3><span class="glyphicon glyphicon-fire"> </span >  Registrar Transportista</h3>

<ul class="nav nav-pills">
  <li role="presentation"><a href="inicio.php">Inicio</a></li>

</ul>
</div>
    </nav>

  </header>
  <div class=" container cuerpo">
 <section class="main">
   <BR>


<div class="panel panel-primary">
<div class="panel-heading"><h3>Transportista</h3></div>
<div class="panel-body">
<form class="form-horizontal" action="transportista.php" method="post">
  <div class="row container">
   <div class="col-md-6">
     <div class="form-group has-success	">
      <label class="control-label col-md-2">DNI:</label>
      <div class="col-md-7">
       <input  class =" form-control" type="text" name="dni" placeholder="DNI" onkeypress="return comprobarnumero(event);" maxlength="8" required >
     </div>
     </div>
    <div class="form-group has-success">
     <label class="control-label col-md-2" >Nombres:</label>
     <div class="col-md-7">
     <input type="text" name="nombre" class="form-control" placeholder="Nombres" required>
     </div>
   </div>
   <div class="form-group has-success">
    <label  class="control-label col-md-2" for="">Apellidos:</label>
    <div class="col-md-7">
      <input class="form-control" type="text" name="apellido" placeholder="Apellidos" required>
     </div>
   </div>
<div class="form-group has-success">
  <label  class="control-label col-md-2" for="">Correo:</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="correo" placeholder="Email@" required>
    </div>
</div>
<div class="form-group has-success">
     <label  class="control-label col-md-2" for="">Fecha de Nacimiento:</label>
     <div class="col-md-7">
      <input class="form-control" type="text" name="fecnac" placeholder="apellido" required>
     </div>
</div>
    <div class="form-group has-success">
    <label  class="control-label col-md-2" for="">Genero:</label>
    <div class="col-md-7">
        <select  class="form-control" name="genero"  >
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
          </select>
     </div>
</div>
   </div>
   <div class="col-md-6">

         <div class="form-group has-success">
          <label  class="control-label col-md-2" >Direccion:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="direccion" placeholder="Direccion" required>
           </div>
         </div>

      
         <div class="form-group has-success">
          <label  class="control-label col-md-2" >$idtransporte:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="$idtransporte" placeholder="Direccion" required>
           </div>
         </div>
         <div class="form-group has-success">
          <label  class="control-label col-md-2" >nrolicencia:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="nrolicencia" placeholder="Direccion" required>
           </div>
         </div>
        </div>
        <div class="form-group">
         <div  class="col-md-7 col-md-offset-2">
           <button class="btn btn-success btn-block" name="guardar">Enviar</button>
         </div>
        </div>
        </form>

    <!--     
         <div class="form-group has-primary">
          <div  class="col-md-7 col-md-offset-2">
            <div><a href="#ventana1" class="btn btn-danger btn-block "data-toggle="modal">Añadir Transporte</a></div>
            <div class="modal fade" id="ventana1">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-body">
                     <form class="form-horizontal" action="empleado.php" method="post">
                       <div class="form-group has-success">
                        <label  class="control-label col-md-2" >RUC:</label>
                        <div class="col-md-7">
                          <input class="form-control" type="text" name="ruc" placeholder="Usuario" required>
                         </div>
                       </div>

                       <div class="form-group has-success">
                        <label  class="control-label col-md-2" >Placa:</label>
                        <div class="col-md-7">
                          <input class="form-control" type="text" name="ruc" placeholder="placa" required>
                         </div>
                       </div>

                     </form>

                   </div>
                 </div>
               </div>
             </div>
          </div>
         </div> -->


   </div>
  </div>


</div>
</section>
</div>


</body>
</html>
