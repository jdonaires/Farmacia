<?php
require_once('../BOL/persona.php');
require_once('../DAO/personaDAO.php');

$per = new Persona();
$perDAO = new PersonaDAO();
?>
<!DOCTYPE html>
<html>
<head>
	
	<title> Formulario para Buscar Persona</title>
</head>
<body>

	 <form action="buscarpersona.php" method="post" class="formulario" >

                    <table  border="0">

                        <tr>

                            <td><input type="text" name="dni" value=""  placeholder="Ingrese DNI"  required style="width:100%;" />
                             <!--Esta edicion se utiliza para que el usuario Ingrese datos al Campo y no lo deje vacio-->
														</td>
                        </tr>
                        <tr>
                            <td >

                                <input type="submit" value="BUSCAR" name="buscar"class="pure-button pure-button-primary" style="width:100%">
                            </td>
                        </tr>
                    </table>
                </form>
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
