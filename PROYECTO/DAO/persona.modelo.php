<?php
require_once '../DAL/DBAccess.php';

class PersonaModelo
{
	private $pdo;

	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}

	public function Registrar(Persona $data)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into persona values(?,?,?,?,?,?)");
    	$statement->bindParam(1,$data->__GET('dni'));
		$statement->bindParam(2,$data->__GET('nombre'));
		$statement->bindParam(3,$data->__GET('apellidos'));
		$statement->bindParam(4,$data->__GET('fecnac'));
		$statement->bindParam(5,$data->__GET('genero'));
		$statement->bindParam(6,$data->__GET('direccion'));
    $statement -> execute();

		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
	
}

?>
