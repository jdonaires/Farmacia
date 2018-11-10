<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/persona.php');
class PersonaDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function Registrar(Persona $persona)
	{
		try
		{
		$statement = $this->pdo->prepare("insert into persona values(?,?,?,?,?,?,?,?)");
    $statement->bindParam(1,$persona->__GET('dni'));
		$statement->bindParam(2,$persona->__GET('nombres'));
		$statement->bindParam(3,$persona->__GET('apellidos'));
		$statement->bindParam(4,$persona->__GET('correo'));
		$statement->bindParam(5,$persona->__GET('fecnac'));
		$statement->bindParam(6,$persona->__GET('genero'));
		$statement->bindParam(7,$persona->__GET('direccion'));
		$statement->bindParam(8,$persona->__GET('tipoPersona'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
