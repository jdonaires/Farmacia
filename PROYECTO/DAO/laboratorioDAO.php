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
    try {

        $statement = $this->pdo->prepare("call insertar_empresa_laboratorio(?,?,?,?,?,?,?);");

        $statement->bindValue(1, $empresa->__GET('ruc'));
        $statement->bindValue(2, $empresa->__GET('razonsocial'));
        $statement->bindValue(3, $empresa->__GET('telefono'));
        $statement->bindValue(4, $empresa->__GET('direccion'));
        $statement->bindValue(5, $empresa->__GET('tipoempresa'));
        $statement->bindValue(6,$laboratorio->__GET('ruc'));
        $statement->bindValue(7,$laboratorio->__GET('regsanitario'));

        $statement->execute();

        return $statement->rowCount();

    } catch (Exception $e) {
        die("insertarTransporte --> err -->" . $e->getMessage());
    }

  }}
?>
