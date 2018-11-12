<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/almacen.php');
class AlmacenDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function almacen(almacen $almacen)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL insertar_almacen(?,?,?)");
    	$statement->bindValue(1,$almacen->__GET('coddtMedicamento'));
		$statement->bindValue(2,$almacen->__GET('stockactual'));
		$statement->bindValue(3,$almacen->__GET('ubicacion'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>
