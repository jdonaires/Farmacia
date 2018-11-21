
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
  <h2><span class="glyphicon glyphicon-fire"> </span > Informe Persona</h2>
  <ul class="nav nav-pills">
  <li role="presentation"><a href="inicio.php">Inicio</a></li>
</ul>
</div>
    </nav>
  </header>
 <section class="main">
<form class="form-horizontal" action="informealmacen.php" method="post">
<div class=" container cuerpo">
  <div class="row">
<div class="col-md-6">
  <div class="panel panel-primary">
  <div class="panel-heading"><h3>Persona</h3></div>
  <div class="panel-body">
  <div class="row ">
   <div class="form-group ">
    <label class="control-label col-md-3" >DNI:</label>
    <div class="col-md-5 has-success">
     <input type="text" name="dni" class="form-control" placeholder="Nombres" required>
    </div>
  </div>
  <div class="form-group ">
   <label class="control-label col-md-3" >Tipo Persona:</label>
   <div class="col-md-5 has-success">
     <select  class="form-control" name="tipopersona"  >
               <option value="1"> Persona 1</option>
               <option value="2"> Persona 2</option>
    </select>
   </div>
 </div>
 <div class="form-group">
  <div  class="col-md-7 col-md-offset-2">
    <button class="btn btn-primary btn-block" name="guardar">Buscar</button>
  </div>
 </div>
  </div>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="panel panel-primary">
<div class="panel-heading"><h3>Tabla</h3></div>
<div class="panel-body">
<div class="row ">




</div>
</div>
</div>
</div>
  </div>
</form>
</section>
</body>
</html>
