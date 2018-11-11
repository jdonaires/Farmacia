<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/transporte.php');
class transporteDAO
{
  private $pdo;
  public function __CONSTRUCT()
  {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
  }
  public function transportista(transporte $transporte)
  {
    try
    {
    $statement = $this->pdo->prepare("CALL insertar_transporte(?,?,?)");
      $statement->bindParam(1,$transporte->__GET('RUC'));
    $statement->bindParam(2,$transporte->__GET('idtransporte'));
    $statement->bindParam(3,$transporte->__GET('placa'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }

}
?>
