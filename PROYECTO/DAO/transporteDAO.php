<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/transporte.php');
class transporteDAO
{
  private $pdo;
  public function __CONSTRUCT()
  {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
  }
  public function transporte(transporte $transporte)
  {
    try
    {
    $statement = $this->pdo->prepare("CALL insertar_transporte(?,?,?)");
      $statement->bindValue(1,$transporte->__GET('RUC'));
    $statement->bindValue(2,$transporte->__GET('idtransporte'));
    $statement->bindValue(3,$transporte->__GET('placa'));
    $statement -> execute();
    } catch (Exception $e)
    {
      die($e->getMessage());
    }
  }


  public function listarTransporte(transporte $transporte)
	{
		try
		{
			$result = array();
			$statement = $this->pdo->prepare("call listar_transporte(?)");
			$statement->bindValue(1,$transporte->__GET('RUC'));
			$statement->execute();
			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$transpor = new Transporte();
				$transpor->__SET('RUC', $r->RUC);
				$transpor->__SET('idtransporte', $r->idtransporte);
				$transpor->__SET('placa', $r->placa);
				$result[] = $transpor;
			}
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
