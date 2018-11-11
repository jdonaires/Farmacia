<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/unidadmedida.php');
class unidadmedidaDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(unidadmedida $unidadmedida)
	{
		try
		{
			$statement = $this->pdo->prepare("CALL up_insertar_unidad_medida(?)");
			$statement->bindParam(1,$unidadmedida->__GET('Descripcion'));
			$statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
