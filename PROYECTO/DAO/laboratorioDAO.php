<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/Laboratorio.php');

  class laboratorioDAO
  {
    private $pdo;

    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }

      public function insertarLaboratorio(laboratorio $laboratorio){
    try
    {
      $statement =$this->pdo->prepare("CALL up_insertar_laboratorio(?,?)");

      $statement->bindValue(1,$laboratorio->__GET('RUC'));
      $statement->bindValue(2,$laboratorio->__GET('RegSanitario'));
      $statement->execute();

    } catch (Exception $e)
    {
      die("insertarLaboratorio function  ->".$e->getMessage());
    }
  }




    public function eliminarLaboratorio($RUC){
    try
    {
      $statement = $this->pdo->prepare("call up_eliminar_laboratorio(?)");
      $statement->bindValue(1,$RUC);
      $statement -> execute();

    } catch (Exception $e)
    {
      die("eliminarLaboratorio function  ->".$e->getMessage());
    }
  }

  }
?>
