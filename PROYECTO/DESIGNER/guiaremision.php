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
<h2><span class="glyphicon glyphicon-fire"> </span >Registrar Guia Remision</h2>
<ul class="nav nav-pills">
  <li role="presentation"><a href="menu.html">Inicio</a></li>
</ul>
</div>
 </nav>
</header>
<div class=" container cuerpo">
<section class="main">
<div class="panel panel-primary">
<div class="panel-heading"><h3>Guia Remision</h3></div>
<div class="panel-body">
<form class="form-horizontal" action="empleado.php" method="post">
<div class="row container">
<div class="col-md-6">

  <div class="form-group has-success	">
   <label class="control-label col-md-4">Numero de Guia de Remision:</label>
   <div class="col-md-4">
    <input  class =" form-control" type="text" name="NroGuiaRemision"  required >
  </div>
  </div>


  <div class="form-group has-success	">
   <label class="control-label col-md-4">Punto Partida:</label>
   <div class="col-md-4">
    <input  class =" form-control" type="text" name="puntopartida"  required >
  </div>
  </div>
 <div class="form-group has-success">
  <label class="control-label col-md-4" > Punto Llegada:</label>
  <div class="col-md-4">
  <input type="text" name="puntollegada" class="form-control"  required>
  </div>
</div>
<div class="form-group has-success">
 <label  class="control-label col-md-4" for="">Fecha Emision:</label>
 <div class="col-md-7">
   <input class="form-control" type="text" name="apellido" placeholder="Apellidos" required>
  </div>
</div>
<div class="form-group has-success">
<label  class="control-label col-md-4" for="">Fecha Inicio Traslado:</label>
 <div class="col-md-7">
 <input class="form-control" type="text" name="correo" placeholder="Email@" required>
 </div>
</div>
</div>
<div class="col-md-6">
  <div class="form-group ">
    <label  class="control-label col-md-3" >Motivo Traslado</label>
    <div class="col-md-7">
      <div class="panel panel-primary">
        <div class="panel-body">
          <div class="form-group ">
           <div class=" col-md-9">
           <input class="" type="checkbox" name="mottraslado" value="venta">  Venta
            <input class="" type="checkbox" name="mottraslado" value="venta"> Traslado
             <input class="" type="checkbox" name="mottraslado" value="venta">Compra
                 </div>
          </div>
          <label  class="control-label col-md-3" >Otros:</label><input class="form-control has-success" type="text" name="correo" placeholder="Otros..." >
        </div>
    </div>
    </div>
  </div>
   <div class="form-group has-success">
     <label  class="control-label col-md-3" for="">Transporte:</label>
     <div class="col-md-7">
       <select  class="form-control" name="idtransporte"  >
                 <option value="1"> Empresa Transporte 1</option>
                 <option value="2"> Empresa Transporte 2</option>
         </select>
       </div>
      </div>
  </div>
</div>
</div>
</form>
</div>


<form class="form-horizontal" action="guiaremision.php" method="post">
  <div class="panel panel-primary">
    <div class="panel-heading">
       <h4>Agregar los Medicamentos</h4>
     </div>
    <div class="panel-body">
      <div class="form-group ">
       <label class="control-label col-md-2" > Medicamento:</label>
       <div class="col-md-4 has-success">
         <select  class="form-control" name="codmed"  >
                   <option value="1"> Medicamento 1</option>
                   <option value="2"> Medicamento 2</option>
        </select>
       </div>
     </div>
     <div class="form-group ">
      <label  class="control-label col-md-2" >Cantidad:</label>
      <div class="col-md-1 has-success">
        <input class="form-control" type="number" name="cantidad"  required>
       </div>
       <label  class="control-label col-md-2" >Lote:</label>
       <div class="col-md-1 has-success">
           <input class="form-control" type="number" name="lote"  required>
        </div>

     </div>
         </div>
    </div>

<div class="panel panel-primary">
<div class="panel-heading"><h3>Registrar Factura</h3></div>
<div class="panel-body">
  <!--<form class="form-horizontal" action="FFactura.php" method="post"> -->

  <div class="row container">
   <div class="col-md-9">

     <div class="form-group has-success	">
      <label class="control-label col-md-2">Detalle Factura: </label>
     </div>

    <div class="form-group has-success">
     <label class="control-label col-md-2" >Nombre Medicamento: </label>
     <div class="col-md-7">
     	<input type="text" name="nombre" class="form-control" placeholder="Nombre del medicamento" required>
     </div>
   </div>

   <div class="form-group has-success">
	    <label  class="control-label col-md-2" for="">Nombre Laboratorio: </label>
	    <div class="col-md-7">
	      <input class="form-control" type="text" name="NomLaboratorio" placeholder="Nombre Laboratorio" required>
	     </div>
   </div>

	 <div class="form-group has-success">
	  	<label  class="control-label col-md-2" for="">Cantidad:</label>
	    <div class="col-md-7">
	    	<input class="form-control" type="text" name="cantidad" placeholder="Cantidad" required>
	    </div>
	</div>
</div>

</form>

</div>
</section>

<div class="form-group">
 <div  class="col-md-7 col-md-offset-2">
   <button class="btn btn-success btn-block" name="Registrar" value="Registrar">Registrar</button>
 </div>
 <br><br>

</div>

</section>
</div>
</body>
</html>
