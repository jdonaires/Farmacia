<?php

require_once('../DAL/DBAccess.php');
require_once('../BOL/persona.php');
require_once('../BOL/transportista.php');

class transportistaDAO
{
  private $pdo;
  public function __CONSTRUCT()
  {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
  }
  public function insertarTransportista(transportista $transportista,persona $persona)
  {
    try
    {
    $statement = $this->pdo->prepare("call insertar_persona_transportista(?,?,?,?;?,?;?,?,?,?)");

    $statement->bindValue(1, $persona->__GET('dni'));
    $statement->bindValue(2,  $persona->__GET('nombre'));
    $statement->bindValue(3,  $persona->__GET('apellido'));
    $statement->bindValue(4,  $persona->__GET('correo'));
    $statement->bindValue(5,  $persona->__GET('fecnac'));
    $statement->bindValue(6,  $persona->__GET('genero'));
    $statement->bindValue(7,  $persona->__GET('direccion'));
    $statement->bindValue(8,  $persona->__GET('tipopersona'));

    $statement->bindValue(9,$transportista->__GET('DNI'));
    $statement->bindValue(10,$transportista->__GET('nrolicencia'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die("insertarTransportista function  ->".$e->getMessage());
    }
  }



  public function Listar()
  {
    try
    {
      $result = array();
      $statement = $this->pdo->prepare("select * from Transporte");
      $statement->execute();

      foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
      {
        $tra = new Transporte();

        $tra->__SET('RUC', $r->ruc);

        $result[] = $tra;
      }

      return $result;
    }
    catch(Exception $e)
    {
      die($e->getMessage());
    }
  }
  }

  public function eliminarTransportista($DNI){
    try
    {
      $statement = $this->pdo->prepare("call up_eliminar_transportista(?)");
      $statement->bindValue(1,$DNI);
      $statement -> execute();

    } catch (Exception $e)
    {
      die("eliminarTransportista function  ->".$e->getMessage());
    }
  }

}
?>
