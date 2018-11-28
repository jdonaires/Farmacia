<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/laboratorio.php');
require_once('../BOL/empresa.php');
  class laboratorioDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }


    public function insertarLaboratorio(Empresa $empresa,laboratorio $laboratorio)
  {
    try
    {
      $statement = $this->pdo->prepare("CALL insertar_empresa_laboratorio(?,?,?,?,?,?,?)");
      $statement->bindValue(1,$empresa->__GET('RUC'));
      $statement->bindValue(2,$empresa->__GET('RegSanitario'));
      $statement->bindValue(3,$empresa->__GET('RegSanitario'));
      $statement->bindValue(4,$empresa->__GET('RegSanitario'));
      $statement->bindValue(5,$empresa->__GET('RegSanitario'));
      $statement->bindValue(6,$laboratorio->__GET('$RUC'));
        $statement->bindValue(7,$laboratorio->__GET('$regsanitario'));
      $statement -> execute();
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
