<?php
	require_once('../BOL/componentes.php');
	require_once('../DAO/componentesDAO.php');

	$compo = new componentes();
	$compoDAO = new componentesDAO();

	if (isset($_POST['guardar']))
	{
		$compo->__SET('coddtMedicamento', $_POST['coddtMedicamento']);
		$compo->__SET('nombre', $_POST['nombre']);
		$compo->__SET('tipo', $_POST['tipo']);
		$compo->__SET('cantidad', $_POST['cantidad']);
		$compo->__SET('codunimedida', $_POST['codunimedida']);
		$compoDAO->Registrar($compo);

		header('Location: FComponentes.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Componentes </title>
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
  <h3><span class="glyphicon glyphicon-fire"> </span > Registrar Componentes</h3>

<ul class="nav nav-pills">
  <li role="presentation"><a href="menu/menu.html">Inicio</a></li>
</ul>
</div>
    </nav>

  </header>
  <div class=" container cuerpo">
 <section class="main">
   <BR>
<div class="panel panel-primary">
<div class="panel-heading"><h3>Registros</h3></div>
<div class="panel-body">
<form class="form-horizontal" action="FComponentes.php" method="post">
  <div class="row container">
   <div class="col-md-6">
     <div class="form-group has-success	">
      <label class="control-label col-md-2">Componentes:</label>
     </div>
    <div class="form-group has-success">
     <label class="control-label col-md-2" >Nombre</label>
     <div class="col-md-7">
     <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
     </div>
   </div>
   <div class="form-group has-success">
    <label  class="control-label col-md-2" for="">Tipo</label>
    <div class="col-md-7">
      <input class="form-control" type="text" name="tipo" placeholder="Tipo" required>
     </div>
   </div>
<div class="form-group has-success">
  <label  class="control-label col-md-2" for="">Cantidad:</label>
    <div class="col-md-7">
    <input class="form-control" type="text" name="cantidad" placeholder="Cantidad" required>
    </div>
</div>
<div class="col-md-6">
			<div class="form-group has-success">
			 <label  class="control-label col-md-2" >Posologia</label>
			</div>
			<div class="form-group has-success">
			 <label  class="control-label col-md-2" >Dosis</label>
			 <div class="col-md-7">
				 <input class="form-control" type="text" name="dosis" placeholder="Dosis" required>
				</div>
			</div>
			<div class="form-group has-success">
			 <label  class="control-label col-md-2" >Indicaciones:</label>
			 <div class="col-md-7">
				 <input class="form-control" type="text" name="indicaciones" placeholder="Indicaciones" required>
				</div>
   </div>
        
</form>

</div>
</section>
</div>


</body>
</html>
