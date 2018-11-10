<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/medicamento.php');
  class medicamentoDAO
  {
      private $pdo;
      public function __CONSTRUCT()
      {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
      }
      public function Registrar(medicamento $medicamento)
      {
        try
        {
            $statement = $this->pdo->prepare("insert into medicamento values(?,?,?,?)");
            $statement->bindParam(1,$medicamento->__GET('codmed'));
            $statement->bindParam(2,$medicamento->__GET('nombre'));
            $statement->bindParam(3,$medicamento->__GET('nombrelaboratorio'));
            $statement->bindParam(4,$medicamento->__GET('idlaboratorio'));
            $statement -> execute();
        } catch (\Exception $e)
        {
            die($e->getMessage());
        }
      }
  }
?>
