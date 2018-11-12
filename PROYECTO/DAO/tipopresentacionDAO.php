<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/tipopresentacion.php');
class tipopresentacionDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function insertarTipopresentacion(tipopresentacion $tipopresentacion)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL up_insertar_tipo_presentacion(?,?)");
		$statement->bindValue(1,$tipopresentacion->__GET('Nombre'));
		$statement->bindValue(2,$tipopresentacion->__GET('Descripcion'));
		$statement -> execute();

		} catch (Exception $e)
		{
			die("insertarTipopresentacion function  ->".$e->getMessage());
		}
	}
}
?>
