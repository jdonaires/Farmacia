<?php
require_once('../BOL/laboratorio.php');
require_once('../DAO/laboratorioDAO.php');

$lab = new laboratorio();
$labDAO = new laboratorioDAO();
?>
<!DOCTYPE html>
<html>
<head>

	<title> Formulario para Buscar laboratorio</title>

	<link rel="stylesheet" type="text/css" href="../estilo/fcomponentes.css">
</head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
<body>
		</br>
			<h1>Buscar laboratorio</h1>
		</br>
	 <form action="buscarLaboratorio.php" method="post" class="formulario" >

	 </br>
        <input type="text" name="RUC" value=""  placeholder="Ingrese RUC"  required style="width:100%;" />
                <!--Esta edicion se utiliza para que el usuario Ingrese datos al Campo y no lo deje vacio-->
        <input type="submit" value="BUSCAR" name="buscar" id="button" class="pure-button pure-button-primary" style="width:100%">

  </form>
        <!--ESTA CONDICION SIRVE PARA REALIZAR BUSQUEDA POR DNI-->

                <?php
                if(isset($_POST['buscar']))
                {
                    $resultado = array();//VARIABLE TIPO RESULTADO
                    $lab->__SET('RUC',$_POST['RUC']);//ESTABLECEMOS EL VALOR DEL DNI
                    $resultado = $labDAO->listarPersona($lab); //CARGAMOS LOS REGISTRO EN EL ARRAY RESULTADO
                    if(!empty($resultado)) //PREGUNTAMOS SI NO ESTA VACIO EL ARRAY
                    {
                        ?>
                        <table class="pure-table pure-table-horizontal">
                                <thead>
                                        <tr>

                                                <th style="text-align:left;">RUC</th>
                                                <th style="text-align:left;">Registro Sanitario</th>

                                        </tr>
                                </thead>
                        <?php
                        foreach( $resultado as $r): //RECORREMOS EL ARRAY RESULTADO A TRAVES DE SUS CAMPOS
                            ?>
                                <tr>

                                        <td><?php echo $r->__GET('RUC'); ?></td>
                                        <td><?php echo $r->__GET('Registro Sanitario'); ?></td>
                                </tr>
                        <?php endforeach;
                    }
                    else
                    {
                        /*echo 'El Dni no se encuentra en la base de datos!';*/
												echo "<script> alert('El RUC no se encuentra en la base de datos!'); </script>";
                    }
                    ?>
                    </table>
                    <?php
                }
                ?>


</script>
</body>
</html>
