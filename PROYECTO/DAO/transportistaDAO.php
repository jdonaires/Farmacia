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
  public function insertarTransportista(transportista $transportista)
  {
    try
    {
    $statement = $this->pdo->prepare("CALL insertar_transportista(?,?)");
    $statement->bindValue(1,$transportista->__GET('DNI'));
    $statement->bindValue(2,$transportista->__GET('nrolicencia'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die("insertarTransportista function  ->".$e->getMessage());
    }
  }

  public function eliminarTransportista($DNI){
    try
    {
      $statement = $this->pdo->prepare("call up_eliminar_transportista(?)");
      $statement->bindParam(1,$DNI);
      $statement -> execute();

    } catch (Exception $e)
    {
      die("eliminarTransportista function  ->".$e->getMessage());
    }
  }

}
?>
