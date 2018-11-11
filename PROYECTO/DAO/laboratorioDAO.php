<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/Laboratorio.php');
  class laboratorioDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdgo = $dba->get_connection();
    }
    public function Registrar(Laboratorio $laboratorio)
    {
      try {
        $statement = $this->pdo->persona("insert into laboratorio values(?,?,?)");
        $statement->bindParam(1,$laboratorio->__GET('RUC'));
        $statement->bindParam(2,$laboratorio->__GET('IdLaboratorio'));
        $statement->bindParam(3,$laboratorio->__GET('RegSanitario'));
        $statement -> execute();
      } catch (\Exception $e)
      {
          die($e->getMessage());
      }

    }
  }
?>
