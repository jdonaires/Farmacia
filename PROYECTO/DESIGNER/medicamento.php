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
<h3><span class="glyphicon glyphicon-fire"> </span >  Registrar Medicamento</h3>
<ul class="nav nav-pills">
  <li role="presentation"><a href="inicio.php">Inicio</a></li>
</ul>
</div>
 </nav>
</header>
<div class=" container cuerpo">
<section class="main">

<form class="form-horizontal" action="empleado.php" method="post">
          <div class="panel panel-primary">
                <div class="panel-heading"> <h3>Medicamento</h3></div>
                    <div class="panel-body">
                          <div class="row container">
                                <div class="col-md-6">
                                    <div class="form-group has-success	">
                                     <label class="control-label col-md-4">Nombre General:</label>
                                     <div class="col-md-7">
                                      <input  class =" form-control" type="text" name="nombre" placeholder="Nombre General" required >
                                    </div>
                                    </div>

                                  </div>
                                      <div class="col-md-6">
                                        <div class="form-group has-success">
                                         <label  class="control-label col-md-4">Nombre de Laboratorio:</label>
                                         <div class="col-md-6">
                                               <input  class =" form-control" type="text" name="nomlaboratorio" placeholder="Nombre  de Laboratorio" required >
                                          </div>
                                        </div>

                                        </div>
                          </div>
                    </div>
            </div>
            <div class="panel panel-primary">
                  <div class="panel-heading"> <h3>Tipo presentation</h3></div>
                      <div class="panel-body">
                            <div class="row container">
                                  <div class="col-md-6">
                                      <div class="form-group has-success	">
                                       <label class="control-label col-md-4">Nombre de Presentacion:</label>
                                       <div class="col-md-7">
                                         <select  class="form-control" name="nombre"  >
                                                   <option value="solida">solida</option>
                                                   <option value="semisolida">semisolida</option>
                                                    <option value="liquida">liquida</option>
                                                     <option value="Gaseosa">Gaseosa</option>

                                           </select>
                                      </div>
                                      </div>

                                    </div>
                                        <div class="col-md-6">
                                          <div class="form-group has-success	">
                                           <label class="control-label col-md-4">Descripcion:</label>
                                           <div class="col-md-7">
                                             <select  class="form-control" name="descripcion"  >
                                                       <option value="Tableta">Tableta</option>
                                                       <option value="Jarabe">Jarabe</option>
                                                        <option value="Unguento">Unguento</option>
                                                         <option value="Inyeccion">Inyeccion</option>
                                                        <option value="Pomo en gotas">Pomo en gotas</option>
                                                        <option value="Crema">Crema</option>

                                               </select>
                                          </div>
                                          </div>


                                          </div>
                            </div>
                      </div>
              </div>
              <div class="panel panel-primary">
                    <div class="panel-heading"> <h3>Detalle Medicamento</h3></div>
                        <div class="panel-body">
                              <div class="row container">
                                    <div class="col-md-6">
                                        <div class="form-group has-success	">
                                         <label class="control-label col-md-4">Psicotropico:</label>
                                         <div class="col-md-7">
                                           <select  class="form-control" name="idlaboratorio"  >
                                                     <option value="Si">Si</option>
                                                     <option value="No">No</option>
                                         </select>
                                        </div>
                                        </div>
                                        <div class="form-group has-success	">
                                         <label class="control-label col-md-4">Peso Unitario:</label>
                                         <div class="col-md-7">
                                           <input  class =" form-control" type="text" name="pesounitario" placeholder="Peso" required >
                                        </div>
                                        </div>

                                            </div>
                                          <div class="col-md-6">
                                            <div class="form-group has-success	">
                                             <label class="control-label col-md-4">Fecha Vencimiento:</label>
                                             <div class="col-md-7">
                                               <input  class =" form-control" type="date" name="fecvenc"   >
                                            </div>
                                            </div>
                                            <div class="form-group has-success	">
                                             <label class="control-label col-md-4">Descripcion:</label>
                                             <div class="col-md-7">
                                               <input  class =" form-control" type="text" placeholder="Descripcion" name="descripcion"   >
                                            </div>
                                            </div>
                                            </div>
                              </div>
                        </div>
                </div>
                <div class="panel panel-primary">
                      <div class="panel-heading"> <h3>Posologia</h3></div>
                          <div class="panel-body">
                                <div class="row container">
                                      <div class="col-md-6">
                                          <div class="form-group has-success	">
                                           <label class="control-label col-md-4">Dosis:</label>
                                           <div class="col-md-7">
                                            <textarea name="dosis" rows="5" cols="45"></textarea>
                                          </div>
                                          </div>
                                        </div>
                                            <div class="col-md-6">

                                              <div class="form-group has-success	">
                                               <label class="control-label col-md-4">Indicaciones:</label>
                                               <div class="col-md-7">
                                               <textarea name="Indicaciones" rows="5" cols="45"></textarea>
                                              </div>
                                              </div>
                                              </div>
                                </div>
                          </div>
                  </div>
                  <div class="panel panel-primary">
                        <div class="panel-heading"> <h3>Almacen</h3></div>
                            <div class="panel-body">
                                  <div class="row container">
                                        <div class="col-md-6">
                                            <div class="form-group has-success	">
                                             <label class="control-label col-md-4">Ubicacion</label>
                                             <div class="col-md-7">
                                               <select  class="form-control" name="ubicacion"  >
                                                         <option value="Ubicacion 1">Ubicacion 1</option>
                                                         <option value="Ubicacion 2">Ubicacion 2</option>
                                                         <option value="Ubicacion 3">Ubicacion 3</option>
                                                         <option value="Ubicacion 4">Ubicacion 4</option>
                                             </select>
                                            </div>
                                            </div>
                                        </div>

                                  </div>
                            </div>
                    </div>

                       <div class="form-group">
                        <div  class="col-md-3 col-md-offset-2">
                          <button name="guardar" class="btn btn-success btn-block">Guardar</button>
                        </div>
                     </div>
</form>


</section>



</body>
</html>
