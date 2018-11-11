<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/posologia.php');

  class PosologiaDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }
    public function Registrar(posologia $posologia)
    {
      try {
        $statement = $this->pdo->prepare("insert into posologia values(?,?,?)");
        $statement->bindParam(1,$posologia->__GET('coddtmedicamento'));
        $statement->bindParam(2,$posologia->__GET('dosis'));
        $statement->bindParam(3,$posologia->__GET('indicaciones'));
        $statement -> execute();
      } catch (Exception $e)
      {
        die($e->getMessage());
      }

    }
  }
?>
