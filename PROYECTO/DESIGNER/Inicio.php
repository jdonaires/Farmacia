<?php
session_start();
$fecha_antigua=$_SESSION['ultimo_ingreso'];
$hora=date("y-n-j H:i:s");
$tiempo = (strtotime($hora)-strtotime($fecha_antigua));
if($tiempo>=680)
{
  session_destroy();
  header('location:SesionError.html');
}
else {
  if(!isset($_SESSION['dni'])&&!isset($_SESSION['apellidos_y_nombres']))
  {
    header('location:SesionIniciar.php');
    die();
  }
  else {
    // echo "<title>Inicio</title>";
    // echo "<center><h1><P>BIENVENIDO AL SISTEMA</P></h1></center>";
    // echo "ID: ".$_SESSION['dni']."<br/>";
    // echo "APELLIDOS Y NOMBRES: ".$_SESSION['apellidos_y_nombres'];
    // echo "";
    $dni=$_SESSION['dni'];
    $usuario=$_SESSION['apellidos_y_nombres'];
  }
}

?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style media="screen">
nav{
  background:#2092CB;
  color: white;
}
footer{
  background:#D8501D;
  color: white;
}
body{
background: white;
margin-top: 80px;

}
.panel-heading{
  background: #5DADE2;
}
.group_user{

  margin:auto;
  bottom:20px;
  width:500px;
  height: 80px;
  position: relative;
}
.group_user td{

  width:40px;

}
</style>

<body>
              <header>
                        <nav class="navbar navbar-fixed-top" role="navigation">
                          <div class="container" >
                            <h3><span class="glyphicon glyphicon-pencil"></span>Menu Farmacia </h3>

                        </div>
                      </nav>
              </header>




              <div class="container">
                <section class="col-md-12 color1">

                     <div class="panel panel-primary">
                       <div class="panel-heading" >
                          <h3>Usuario</h3>
                        </div>

<BR>
                        <div class="panel-body">
                        <table class='group_user'>
                          <tr>
                              <td>DNI</td>
                              <td><?php echo $dni?></td>

                          </tr>
                          <tr>
                              <td>PERSONA</td>
                              <td><?php echo $usuario ?></td>
                          </tr>
                        </table>
                      </div>
                      </div>
                    </section>
                 <section class="col-md-12 color1">

                      <div class="panel panel-primary">
                        <div class="panel-heading" >
                           <h3>Operaciones</h3>
                         </div>
                        <div class="panel-body">

                          <div class="row">
                           <div class="col-md-2">
                                <img src="imagenes/empleado.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="regempleado.php" class="btn btn-success btn-block " >Empleado</a></div>

                           </div>
                           <div class="col-md-2">
                                <img src="imagenes/transporte.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="transporte.php" class="btn btn-success btn-block " >Transporte</a></div>

                           </div>
                           <div class="col-md-2">
                                <img src="imagenes/Transportista.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="transportista.php" class="btn btn-success btn-block " >Transportista</a></div>

                           </div>
                           <div class="col-md-2">
                                <img src="imagenes/guiaremision.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="guiaremision.php" class="btn btn-success btn-block " >Guia de Remision </a></div>

                           </div>
                           <div class="col-md-2">
                                <img src="imagenes/medicamento.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="medicamento.php" class="btn btn-success btn-block " >Medicamento</a></div>

                           </div>
                           <div class="col-md-2">
                                <img src="imagenes/laboratorio.png" alt="" width="100%" class="img img-rounded">
                                <div><a href="laboratorio.php" class="btn btn-success btn-block " >Laboratorio</a></div>

                           </div>

                            </div>

                        </div>

                        </div>
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                             <h3>Informes</h3>
                           </div>
                          <div class="panel-body">
                            <div class="row">

                                <div class="col-md-2">
                                    <img src="imagenes/almacen.png" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informealmacen.php" class="btn  btn-danger btn-block" >Almacen</a></div>

                                                    </div>
                                                    <div class="col-md-2">
                                                      <img src="imagenes/empleado.png" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informepersona.php" class="btn  btn-danger btn-block" >Persona</a></div>

                                                    </div>
                                                    <div class="col-md-2">
                                                      <img src="imagenes/informemedicamento.jpg" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informemedicamento.php" class="btn  btn-danger btn-block" >Medicamento</a></div>


                                                    </div>
                                                    <div class="col-md-2">
                                                      <img src="imagenes/informeempresa.jpg" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informeguiaremision.php" class="btn  btn-danger btn-block" >Guia de Remision </a></div>

                                                    </div>
                                                    <div class="col-md-2">
                                                      <img src="imagenes/laboratorio.png" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informelaboratorio.php" class="btn  btn-danger btn-block" >Laboratorios </a></div>

                                                    </div>
                                                    <div class="col-md-2">
                                                      <img src="imagenes/transporte.png" alt="" width="100%"  class="img img-rounded">
                                                      <div><a href="informetransporte.php" class="btn  btn-danger btn-block" >Transporte</a></div>

                                                    </div>

                                </div>



                          </div>

                          </div>


                 </section>
              </div>
</body>
</html>
