<?php
require_once '../BOL/persona.php';
require_once '../DAO/persona.modelo.php';

// Lógica
$alm = new persona();
$model = new personamodelo();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'registrar':
            $alm->__SET('dni',$_POST['dni']);
            $alm->__SET('nombre',$_POST['nombre']);
            $alm->__SET('apellido',$_POST['apellido']);
            $alm->__SET('fecnac',$_POST['fecnac']);
            $alm->__SET('genero',$_POST['genero']);
            $alm->__SET('direccion',$_POST['direccion']);
            
            $model->Registrar($alm);
            header('Location: registrarPersona.php');
            
            break;

        case 'eliminar':
            $model->Eliminar($_REQUEST['dni']);
            header('Location: registrarPersona.php');
            break;
    }
    echo "<p>REGISTRADO</p>";
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>EPICS</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
        <link rel="stylesheet" type="text/css" href="../estilo/estilo.css">
    </head>
    <body style="padding:15px;">
REGISTRAR CICLO
        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">


                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">DNI</th>
                            <td>
                                <input type="text" name="dni" value="" style="width:100%;" required maxlength="8"/>
                               
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Nombres</th>
                            <td>
                                <input type="text" name="nombre" value="" style="width:100%;" required />
                               
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Apellidos</th>
                            <td>
                                <input type="text" name="apellido" value="" style="width:100%;" required />
                               
                            </td>
                        </tr>

                        
                        

                        <tr>
                            <th style="text-align:left;">Fecha Nacimiento</th>
                            <td><input type="date" name="fecnac" value="" style="width:100%;" required "/></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Genero</th>
                            <td><select name="genero" value="">
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
   
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Direccion</th>
                            <td><input type="text" name="direccion" value="" style="width:100%;" required /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                                 <button type="reset" class="pure-button pure-button-primary">Reset</button>
                            </td>
                            
                        </tr>
                        
                    </table>
                </form>


            </div>
        </div>

    </body>
</html>
