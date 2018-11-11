<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/factura.php');

  class facturaDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }
    public function Registrar(factura $factura)
    {
      try {
        $statement = $this->pdo->prepare("insert into factura values(?,?,?,?,?)");
        $statement->bindParam(1,$factura->__GET('iddetallegm'));
        $statement->bindParam(1,$factura->__GET('costounitario'));
        $statement->bindParam(1,$factura->__GET('costototal'));
        $statement->bindParam(1,$factura->__GET('igv'));
        $statement->bindParam(1,$factura->__GET('subtotal'));
        $statement -> execute();
      } catch (Exception $e)
      {
          die($e->getMessage());
      }
    }
  }
?>
