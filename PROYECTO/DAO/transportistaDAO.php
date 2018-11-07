<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/transportista.php');
class transportistaDAO
{
  private $pdo;
  public function __CONSTRUCT()
  {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
  }
  public function transportista(transportista $transportista)
  {
    try
    {
    $statement = $this->pdo->prepare("CALL insertar_transportista(?,?,?)");
      $statement->bindParam(1,$transportista->__GET('DNI'));
    $statement->bindParam(2,$transportista->__GET('idtransporte'));
    $statement->bindParam(3,$transportista->__GET('nrolicencia'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

}
?>
