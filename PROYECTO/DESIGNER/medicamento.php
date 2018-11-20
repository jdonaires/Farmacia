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
  <li role="presentation"><a href="menu.html">Inicio</a></li>
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
                                      <input  class =" form-control" type="text" name="dni" placeholder="DNI" required >
                                    </div>
                                    </div>

                                  </div>
                                      <div class="col-md-6">
                                        <div class="form-group has-success">
                                         <label  class="control-label col-md-4">Nombre Laboratorio:</label>
                                         <div class="col-md-6">
                                             <select  class="form-control" name="idlaboratorio"  >
                                                       <option value="M">Laboratorio 1</option>
                                                       <option value="F">Laboratorio 2</option>
                                               </select>
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
                                         <select  class="form-control" name="idlaboratorio"  >
                                                   <option value="M">solida</option>
                                                   <option value="F">semisolida</option>
                                                    <option value="F">liquida</option>
                                                     <option value="F">Gaseosa</option>

                                           </select>
                                      </div>
                                      </div>
                                      <div class="form-group has-success	">
                                       <label class="control-label col-md-4">Descripcion:</label>
                                       <div class="col-md-7">
                                         <select  class="form-control" name="idlaboratorio"  >
                                                   <option value="M">Tableta</option>
                                                   <option value="F">Jarabe</option>
                                                    <option value="F">Unguento</option>
                                                     <option value="F">Inyeccion</option>
                                                    <option value="F">Pomo en gotas</option>
                                                    <option value="F">Crema</option>
                                                      <option value="F">Polvo</option>
                                           </select>
                                      </div>
                                      </div>

                                    </div>
                                        <div class="col-md-6">
                                          <div class="form-group has-success">
                                           <label  class="control-label col-md-4">Nombre Laboratorio:</label>
                                           <div class="col-md-6">
                                               <select  class="form-control" name="idlaboratorio"  >
                                                         <option value="M">Laboratorio 1</option>
                                                         <option value="F">Laboratorio 2</option>
                                                 </select>
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
                                           <select  class="form-control" name="idlaboratorio"  >
                                                     <option value="M">solida</option>
                                                     <option value="F">semisolida</option>
                                                      <option value="F">liquida</option>
                                                       <option value="F">Gaseosa</option>

                                             </select>
                                        </div>
                                        </div>
                                        <div class="form-group has-success	">
                                         <label class="control-label col-md-4">Descripcion:</label>
                                         <div class="col-md-7">
                                           <select  class="form-control" name="idlaboratorio"  >
                                                     <option value="M">Tableta</option>
                                                     <option value="F">Jarabe</option>
                                                      <option value="F">Unguento</option>
                                                       <option value="F">Inyeccion</option>
                                                      <option value="F">Pomo en gotas</option>
                                                      <option value="F">Crema</option>
                                                        <option value="F">Polvo</option>
                                             </select>
                                        </div>
                                        </div>

                                      </div>
                                          <div class="col-md-6">
                                            <div class="form-group has-success">
                                             <label  class="control-label col-md-4">Nombre Laboratorio:</label>
                                             <div class="col-md-6">
                                                 <select  class="form-control" name="idlaboratorio"  >
                                                           <option value="M">Laboratorio 1</option>
                                                           <option value="F">Laboratorio 2</option>
                                                   </select>
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
                                             <select  class="form-control" name="idlaboratorio"  >
                                                       <option value="M">solida</option>
                                                       <option value="F">semisolida</option>
                                                        <option value="F">liquida</option>
                                                         <option value="F">Gaseosa</option>

                                               </select>
                                          </div>
                                          </div>
                                          <div class="form-group has-success	">
                                           <label class="control-label col-md-4">Descripcion:</label>
                                           <div class="col-md-7">
                                             <select  class="form-control" name="idlaboratorio"  >
                                                       <option value="M">Tableta</option>
                                                       <option value="F">Jarabe</option>
                                                        <option value="F">Unguento</option>
                                                         <option value="F">Inyeccion</option>
                                                        <option value="F">Pomo en gotas</option>
                                                        <option value="F">Crema</option>
                                                          <option value="F">Polvo</option>
                                               </select>
                                          </div>
                                          </div>

                                        </div>
                                            <div class="col-md-6">
                                              <div class="form-group has-success">
                                               <label  class="control-label col-md-4">Nombre Laboratorio:</label>
                                               <div class="col-md-6">
                                                   <select  class="form-control" name="idlaboratorio"  >
                                                             <option value="M">Laboratorio 1</option>
                                                             <option value="F">Laboratorio 2</option>
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
