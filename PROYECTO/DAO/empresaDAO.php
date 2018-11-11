<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/empresa.php');
class empresaDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(empresa $empresa)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL insertar_empresa(?,?,?,?,?)");
    $statement->bindParam(1,$empresa->__GET('RUC'));
		$statement->bindParam(2,$empresa->__GET('RazonSocial'));
		$statement->bindParam(3,$empresa->__GET('Telefono'));
		$statement->bindParam(4,$empresa->__GET('Direccion'));
		$statement->bindParam(5,$empresa->__GET('TipoEmpresa'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
?>
