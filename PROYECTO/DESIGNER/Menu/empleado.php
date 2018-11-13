

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
  <h3><span class="glyphicon glyphicon-fire"> </span > Registrar Empleado</h3>

<ul class="nav nav-pills">
  <li role="presentation"><a href="index.html">Inicio</a></li>
  <li role="presentation"><a href="gustos.html">Gustos</a></li>
  <li role="presentation"><a href="pensamiento.html">Pensamientos</a></li>
  <li role="presentation"><a href="">Escritos</a></li>
 <li role="presentation"> <a href="">Mas+ </a></li>
</ul>
</div>
    </nav>

  </header>
  <div class=" container cuerpo">
 <section class="main">
   <BR>
<div class="panel panel-primary">
<div class="panel-heading"><h3>Empleado</h3></div>
<div class="panel-body">
<form class="form-horizontal" action="empleado.php" method="post">
  <div class="row container">
   <div class="col-md-6">
     <div class="form-group has-success	">
      <label class="control-label col-md-2">DNI:</label>
      <div class="col-md-7">
       <input  class =" form-control" type="text" name="dni" placeholder="DNI" required >
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
          <label  class="control-label col-md-2" for="">Turno:</label>
                          <div class="col-md-7">
                            <select  class="form-control" name="turno"  >
                                      <option value="mañana">Mañana</option>
                                      <option value="tarde">Tarde</option>
                                      <option value="noche">Noche</option>
                              </select>
                          </div>
         </div >
         <div class="form-group has-success">
          <label  class="control-label col-md-2" >Especialidad:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="especialidad" placeholder="Especialidad" required>
           </div>
         </div>
         <div class="form-group has-success">
          <label  class="control-label col-md-2" >Usuario:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="usuario" placeholder="Usuario" required>
           </div>
         </div>
         <div class="form-group has-success">
          <label  class="control-label col-md-2" >Password:</label>
          <div class="col-md-7">
            <input class="form-control" type="text" name="clave" placeholder="Direccion" required>
           </div>
         </div>

   </div>
  </div>


        <div class="form-group">
         <div  class="col-md-7 col-md-offset-2">
           <button class="btn btn-success btn-block" name="guardar">Guardar</button>
         </div>
        </div>

</form>

</div>
</section>
</div>


</body>
</html>
