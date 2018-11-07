<?php
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();

if(isset($_POST['guardar']))
{

	$per->__SET('nombres',$_POST['nombres']);
	$per->__SET('apellidos',$_POST['apellidos']);
	$per->__SET('correo', $_POST['correo']);
	$per->__SET('sexo', $_POST['sexo']);
	$per->__SET('fecnac', $_POST['fecnac']);
	$per->__SET('dni', $_POST['dni']);
	$perDAO->Registrar($per);
	header('Location: frmPersona.php');
}
/**<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>**/


?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario </title>
        <link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
        <link rel="stylesheet" type="text/css" href="../estilo/frmpersona.css">
       


	</head>
    <body style="padding:15px;" class="cajon">
                <form action="frmpersona.php" method="post" class="formulario" id="form2" name="form" >
                    <span align="center">REGISTRAR PERSONA</span>
                    <table  border="0"> 
                        <tr>
                            <td><input type="text" name="nombres" value="" style="width:100%;" placeholder="Nombres" id="namee" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apellidos" value="" style="width:100%;" placeholder="Apellidos" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="correo" value="" style="width:100%;" placeholder="Correo" /></td>
                        </tr>
                        <tr >
                            <td><div class="caja">
                                <select name="sexo" >
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                               <td><input type="date" name="fecnac" value="" /></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dni" value="" style="width:100%;" placeholder="Dni" maxlength="8" /></td>
                        </tr>

                        <tr>
                            <td >
								<input type="submit" value="GUARDAR" name="guardar" style="width:108%">	
                            </td>
                        </tr>
                    </table>
                </form>
                
                <form action="frmpersona.php" method="post" class="formulario" >

                    <table  border="0">
                        
                        <tr>
                            
                            <td><input type="text" name="dni" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td >
								
								<input type="submit" value="BUSCAR" name="buscar"class="pure-button pure-button-primary" style="width:100%">
                            </td>
                        </tr>
                    </table>
                </form>

            </div>
        </div>

				<!--ESTA CONDICION SIRVE PARA REALIZAR BUSQUEDA POR DNI-->

				<?php
				if(isset($_POST['buscar']))
				{
					$resultado = array();//VARIABLE TIPO RESULTADO
					$per->__SET('dni',$_POST['dni']);//ESTABLECEMOS EL VALOR DEL DNI
					$resultado = $perDAO->Listar($per); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
					if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
					{
						?>
						<table class="pure-table pure-table-horizontal">
								<thead>
										<tr>
												<th style="text-align:left;">ID</th>
												<th style="text-align:left;">Nombres</th>
												<th style="text-align:left;">Apellidos</th>
												<th style="text-align:left;">DNI</th>
										</tr>
								</thead>
						<?php
						foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
							?>
								<tr>
										<td><?php echo $r->__GET('id'); ?></td>
										<td><?php echo $r->__GET('nombres'); ?></td>
										<td><?php echo $r->__GET('apellidos'); ?></td>
										<td><?php echo $r->__GET('dni'); ?></td>
								</tr>
						<?php endforeach;
					}
					else
					{
						echo 'El Dni no se encuentra en la base de datos!';
					}
					?>
					</table>
					<?php
				}
				?>
<script>

/*document.getElementById("namee").oncllick = function(){

document.getElementById("namee").style.background="teal";

}*/
body.onmouseover = function() {
     var a=document.getElementsById("namee");
      a.style.backgroundColor="blue";

  }


</script>
    </body>
</html>
