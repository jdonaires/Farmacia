<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/empleado.php');
class empleadoDAO
{
  private $pdo;
  public function __CONSTRUCT()
  {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
  }
  public function empleado(empleado $empleado)
  {
    try
    {
    $statement = $this->pdo->prepare("CALL insertar_empleado(?,?,?,?,?)");
    $statement->bindParam(2,$empleado->__GET('Turno'));
    $statement->bindParam(3,$empleado->__GET('especialidad'));
    $statement->bindParam(4,$empleado->__GET('usuario'));
    $statement->bindParam(5,$empleado->__GET('clave'));
    $statement->bindParam(6,$empleado->__GET('dni'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

}
?>
