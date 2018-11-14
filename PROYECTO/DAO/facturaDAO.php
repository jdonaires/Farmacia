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
        $statement->bindValue(1,$factura->__GET('iddetallegm'));
        $statement->bindValue(2,$factura->__GET('costounitario'));
        $statement->bindValue(3,$factura->__GET('costototal'));
        $statement->bindValue(4,$factura->__GET('igv'));
        $statement->bindValue(5,$factura->__GET('subtotal'));
        $statement -> execute();
      } catch (Exception $e)
      {
          die($e->getMessage());
      }
    }
  }
?>
