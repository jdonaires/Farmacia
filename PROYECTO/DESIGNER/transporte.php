<?php
require_once('../BOL/transporte.php');
require_once('../BOL/empresa.php');
require_once('../DAO/transporteDAO.php');
require_once('../DAL/DBAccess.php');
$tran = new transporte();
$empDAO = new transporteDAO();
$log = new empresa();
if (isset($_POST['guardar'])) {
    $tran->__SET('ruc', $_POST['ruc']);
    $tran->__SET('placa',$_POST['placa']);
    $log->__SET('ruc',$_POST['ruc']);
    $log->__SET('razonsocial', $_POST['razonsocial']);
    $log->__SET('telefono', $_POST['telefono']);
    $log->__SET('direccion',$_POST['direccion']);
    $log->__SET('tipoempresa','Transporte');

    $empDAO->insertarTransporte($log,$tran);

    header('Location: transporte.php');
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/icon.png" />
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    header {
        background: #202E37;
        color: white;
    }

    nav {
        background: #202E37;
        color: white;

    }

    .cuerpo {
        margin-top: 110px;
    }
</style>

<body>
<header>

    <nav class="navbar navbar-fixed-top ">
        <div class="container">
            <h3><span class="glyphicon glyphicon-fire"> </span> Registrar Transporte</h3>

            <ul class="nav nav-pills">
                <li role="presentation"><a href="inicio.php">Inicio</a></li>

            </ul>
        </div>
    </nav>

</header>
<script type="text/javascript" src="../js/funciones.js"></script>
<section class="main">
    <BR>

    <form class="form-horizontal" action="transporte.php" method="post">
        <div class=" container cuerpo">
            <div class="row">

                <div class="col-md-6">


                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Transporte</h3></div>
                        <div class="panel-body">
                            <div class="row ">
                                <div class="form-group 	">
                                    <label class="control-label col-md-2">RUC:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="ruc" placeholder="RUC" onkeypress="return comprobarnumero(event);" maxlength="11" required>
                                    </div>

                                </div>
                                <div class="form-group 	">
                                    <label class="control-label col-md-2">Placa:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="placa" placeholder="Placa" required>
                                    </div>

                                </div>

                                <div class="form-group 	">
                                    <label class="control-label col-md-2">Razonsocial:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="razonsocial" placeholder="Razonsocial" required>
                                    </div>

                                </div>
                                <div class="form-group 	">
                                    <label class="control-label col-md-2">Telefono:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="telefono"  onkeypress="return comprobarnumero(event);" maxlength="9"placeholder="Telefono" required>
                                    </div>

                                </div>
                                <div class="form-group 	">
                                    <label class="control-label col-md-2">Dirección:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="direccion" placeholder="Dirección" required>
                                    </div>

                                </div>


                                
                                <div class="form-group ">
                                  <div class="col-md-4 ">
                                      <button class="btn btn-primary btn-block">Modificar</button>
                                  </div>
                                  <div class="col-md-4 ">
                                      <button name="guardar" class="btn btn-primary btn-block">Agregar</button>
                                  </div>

                                    <div class="col-md-4 ">
                                        <button class="btn btn-primary btn-block">Modificar</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
</form>

                <form class="" action="transporte.php" method="post">


                <div class="col-md-6">


                    <div class="panel panel-primary">
                        <div class="panel-heading"><h3>Buscar</h3></div>
                        <div class="panel-body">
                            <div class="row ">

                                <div class="form-group 	">
                                    <label class="control-label col-md-2">RUC:</label>
                                    <div class="col-md-5 has-success">
                                        <input class=" form-control " type="text" name="ruc" placeholder="RUC" required>
                                    </div>
                                    <div class="col-md-4 ">
                                        <button name ="buscar" class="btn btn-primary btn-block">Buscar</button>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                  </form>
            </div>




</section>


</body>
</html>
