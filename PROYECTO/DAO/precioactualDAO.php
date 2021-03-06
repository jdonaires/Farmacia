<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/precioactual.php');
  class PrecioActualDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }
    public function Registrar(precioactual $precioactual)
    {
      try {
        $statement = $this->pdo->prepare("insert into precioactual values(?,?,?,?)");
        $statement->bindValue(1,$precioactual->__GET('coddtmedicamento'));
        $statement->bindValue(2,$precioactual->__GET('precio'));
        $statement->bindValue(3,$precioactual->__GET('estado'));
        $statement->bindValue(4,$precioactual->__GET('fecactualizacion'));
        $statement -> execute();
      } catch (Exception $e)
      {
          die($e->getMessage());
      }

    }
  }
?>
