<?php
session_start();
$fecha_antigua=$_SESSION['ultimo_ingreso'];
$hora=date("y-n-j H:i:s");
$tiempo = (strtotime($hora)-strtotime($fecha_antigua));
if($tiempo>=60)
{
  session_destroy();
  header('location:SesionError.html');
}
else {
  if(!isset($_SESSION['dni'])&&!isset($_SESSION['apellidos_y_nombres']))
  {
    header('location:SesionIniciar.php');
    die();
  }
  else {
    echo "<title>Inicio</title>";
    echo "<center><h1><P>BIENVENIDO AL SISTEMA</P></h1></center>";
    echo "ID: ".$_SESSION['dni']."<br/>";
    echo "APELLIDOS Y NOMBRES: ".$_SESSION['apellidos_y_nombres'];
  }
}

?>
