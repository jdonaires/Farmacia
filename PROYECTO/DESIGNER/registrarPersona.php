<?php
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();

if(isset($_POST['guardar']))
{
    $per->__SET('dni', $_POST['dni']);
    $per->__SET('nombres',$_POST['nombres']);
    $per->__SET('apellidos',$_POST['apellidos']);
    $per->__SET('correo', $_POST['correo']);
    $per->__SET('genero', $_POST['sexo']);
    $per->__SET('fecnac', $_POST['fecnac']);
    $per->__SET('direccion', $_POST['direccion']);
    $per->__SET('tipopersona', $_POST['tipopersona']);
    $perDAO->Registrar($per);

    header('Location: registrarpersona.php');
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
                <form action="registrarpersona.php" method="post" class="formulario" id="form2" name="form" >
                    <span align="center">REGISTRAR PERSONA</span>
                    <table  border="0">
                        <tr>
                            <td><input type="text" name="nombres" value="" style="width:100%;" placeholder="Nombres" id="namee" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="apellidos" value="" style="width:100%;" placeholder="Apellidos" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="dni" value="" style="width:100%;" placeholder="DNI" id="dni" required/></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="correo" value="" style="width:100%;" placeholder="Correo" required/></td>
                        </tr>
                        <tr >
                            <td><div class="caja" required>
                                <select name="sexo" >
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                               <td><input type="date" name="fecnac" value="" required/></td>
                        </tr>
                        <tr>
                            <td><div class="caja" required>
                                <select name="tipopersona" >
                                    <option value="Empleado">Empleado</option>
                                    <option value="Transportista">Transportista</option>
                                </select>
                            </div>
                            </td>
                        </tr>
                        <tr>
                               <td><input type="text" name="direccion" value="" placeholder="Direccion" required/></td>
                        </tr>
                        <tr>
                            <td >
                                <input type="submit" value="GUARDAR" name="guardar" style="width:108%">
                            </td>
                        </tr>
                    </table>
                </form>



            </div>
        </div>


    </body>
</html>
