<?php
require_once('../BOL/tipopresentacion.php');
require_once('../DAO/tipopresentacionDAO.php');

$tp = new TipoPresentacion();
$dao = new TipoPresentacionDAO();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Ingresar Tipo de Presentacion</title>
</head>
<body>

<div class="container">

    <div class="row justify-content-md-center">
        <div class="col-sm-auto">
            <h1 class="display-4">Nuevo Tipo de Presentación</h1>
        </div>
    </div>

    <div class="row  justify-content-md-center">
        <!-- FORMULARIO---------------->
        <form class="shadow p-3 mb-5 bg-white rounded" style="width:500px;" action="tipoPresentacion.php" method="POST">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input required type="text" class="form-control" name="nombre" id="nombre"
                       placeholder="Ingrese el nombre">

            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea required class="form-control" id="descripcion" name="descripcion" rows="2"></textarea>

            </div>
            <button type="submit" class="btn btn-primary" name="btnGuardar" id="btnGuardar">Guardar</button>
        </form>
        <!-- FORMULARIO---------------->
    </div>
    <?php
    if (isset($_POST['btnGuardar'])) {
        try {

            $tp->__SET('nombre', $_POST['nombre']);
            $tp->__SET('descripcion', $_POST['descripcion']);

            $result = $dao->insertarTipoPresentacion($tp);

            if ($result > 0) {
                echo '<div class="row alert alert-success" role="alert">';
                echo 'El tipo de presentacion se ha guardado correctamente';
                echo '</div>';
            } else {
                echo '<div class="row alert alert-danger" role="alert">';
                echo 'Hubo un error';
                echo '</div>';
            }

        } catch (Exception $e) {
            die("guardar tPresentacion Interfaz  ->" . $e->getMessage());
        }

    }
    ?>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>