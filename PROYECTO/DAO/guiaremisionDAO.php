<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/guiaremision.php');
class GuiaRemisionDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(guiaremision $guiaremision)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL up_insertar_guia_remision(?,?,?,?,?,?,?)");
		$statement->bindValue(1,$guiaremision->__GET('nroguia'));
    $statement->bindValue(2,$guiaremision->__GET('puntopartida'));
		$statement->bindValue(3,$guiaremision->__GET('puntollegada'));
		$statement->bindValue(4,$guiaremision->__GET('fecemision'));
		$statement->bindValue(5,$guiaremision->__GET('fecinitraslado'));
		$statement->bindValue(6,$guiaremision->__GET('mottraslado'));
		$statement->bindValue(7,$guiaremision->__GET('idtransporte'));
	  $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	}
?>
