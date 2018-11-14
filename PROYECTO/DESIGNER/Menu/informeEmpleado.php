
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Informe Persona</title>
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
  <h2><span class="glyphicon glyphicon-fire"> </span > Informe Empleado</h2>
</div>
    </nav>
  </header>
 <section class="main">
<form class="form-horizontal" action="informealmacen.php" method="post">
<div class=" container cuerpo">
  <div class="row col-md-10 ">

  <div class="panel panel-primary">
  <div class="panel-heading"><h3>Empleado</h3></div>
  <div class="panel-body">
  <div class="row  container">
    <div class="col-md-12 ">
                <div class="col-md-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Nombre:</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-group ">

                   <div class="col-md-5 has-success">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombres" >
                   </div>
                   <div  class="col-md-2 ">
                     <button class="btn btn-primary btn-block" name="buscar">Buscar</button>
                   </div>
                  </div>
                </div>
    </div>
    <div class="col-md-12">
                <div class="col-md-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Turno:</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-group ">

                   <div class="col-md-5 has-success">
                     <select  class="form-control" name="turno"  >
                               <option value="mañana"> Mañana</option>
                               <option value="tarde"> tarde</option>
                               <option value="noche"> Noche</option>
                    </select>

                   </div>
                   <div  class="col-md-2 ">
                     <button class="btn btn-primary btn-block" name="buscar">Buscar</button>
                   </div>
                  </div>
                </div>
    </div>
    <div class="col-md-12">
                <div class="col-md-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Genero:</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-group ">

                   <div class="col-md-5 has-success">
                     <select  class="form-control" name="genero"  >
                               <option value="M"> Masculino</option>
                               <option value="F"> Femenino</option>
                    </select>
                   </div>
                   <div  class="col-md-2 ">
                     <button class="btn btn-primary btn-block" name="buscar">Buscar</button>
                   </div>
                  </div>
                </div>
    </div>
    <div class="col-md-12">
                <div class="col-md-2">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Dni:</label>
                  </div>
                </div>
                <div class="col-md-10">
                  <div class="form-group ">

                   <div class="col-md-5 has-success">
                    <input type="text" name="dni" class="form-control" placeholder="DNI" >
                   </div>
                   <div  class="col-md-2 ">
                     <button class="btn btn-primary btn-block" name="buscar">Buscar</button>
                   </div>
                  </div>
                </div>
    </div>


  </div>
  </div>
</div>

<div class="row">
<div class="panel panel-primary">
<div class="panel-heading"><h3>Tabla</h3></div>
<div class="panel-body">
<div class="row ">

<table class="table">
  <thead>
    <tr>
      <th scope="col"  >Id </th>
      <th scope="col">DNI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="col">Fech Nac</th>
      <th scope="col">Genero</th>
      <th scope="col">Direccion</th>
      <th scope="col">Turno</th>
      <th scope="col">Especialidad</th>
      <th scope="col">Usuario</th>
      <th scope="col">Clave	</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>

    </tr>


  </tbody>
</table>


</div>
</div>
</div>
</div>
  </div>
</form>
</section>
</body>
</html>
