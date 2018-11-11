<?php
	require_once("../../BOL/persona.php");
	require_once("../../DAL/DBAccess.php");
	
	class PersonaDAO
	{
		private $pdo;

		public function __CONSTRUCT()
		{
				$dba = new DBAccess();
				$this->pdo = $dba->get_connection();
		}
		public function insertarPersona(Persona $persona)
		{
		
			try
			{
				$statement = $this->pdo->prepare("call up_insertar_persona(?,?,?,?,?,?,?,?)");

				$statement->bindParam(1,$persona->__GET('dni'));
				$statement->bindParam(2,$persona->__GET('nombres'));
				$statement->bindParam(3,$persona->__GET('apellidos'));
				$statement->bindParam(4,$persona->__GET('fecnac'));
				$statement->bindParam(5,$persona->__GET('genero'));
				$statement->bindParam(6,$persona->__GET('direccion'));
				$statement->bindParam(7,$persona->__GET('tipopersona'));
				$statement->bindParam(8,$persona->__GET('correo'));

				$statement -> execute();
			} catch (Exception $e)
			{
				die("insertarPersona function  ->".$e->getMessage());
			}
		}

	}
?>
