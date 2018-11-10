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
		$statement = $this->pdo->prepare("CALL insertar_guiaremision(?,?,?,?,?,?,?)");
		$statement->bindParam(1,$guiaremision->__GET('nroguia'));
    $statement->bindParam(2,$guiaremision->__GET('puntopartida'));
		$statement->bindParam(3,$guiaremision->__GET('puntollegada'));
		$statement->bindParam(4,$guiaremision->__GET('fecemision'));
		$statement->bindParam(5,$guiaremision->__GET('fecinitraslado'));
		$statement->bindParam(6,$guiaremision->__GET('mottraslado'));
		$statement->bindParam(7,$guiaremision->__GET('idtransporte'));
	  $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	}
