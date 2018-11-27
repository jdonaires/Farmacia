<?php
	require_once("../BOL/persona.php");
	require_once("../DAL/DBAccess.php");
	require_once('../BOL/empleado.php');
	class PersonaDAO
	{
		private $pdo;

		public function __CONSTRUCT()
		{
				$dba = new DBAccess();
				$this->pdo = $dba->get_connection();
		}

			public function registrarse(empleado $login)
			{
				try
				{
					$result = array();

					$statement = $this->pdo->prepare("call up_registrar(?,?)");
					$statement->bindValue(1,$login->__GET('usuario'));
					$statement->bindValue(2,$login->__GET('clave'));
					$statement->execute();

					foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
					{
						$per = new Persona();

						$per->__SET('dni', $r->dni);
						$per->__SET('nombre', $r->apellidos_nombres);

						$result[] = $per;
					}

					return $result;
				}
				catch(Exception $e)
				{
					die($e->getMessage());
				}
			}
		public function listarPersona(Persona $persona) {
			try
			{
				$statement = $this->pdo->prepare("call up_listar_persona(?)");

				$statement->bindValue(1,$persona->__GET('dni'));
				$statement -> execute();
        $result = (array)$statement->fetchAll(PDO::FETCH_CLASS,"Persona");

				return $result;

			} catch (Exception $e)
			{
				die("listarPersona function  ->".$e->getMessage()." - error message: > ".$e->getLine()." - ".$e->getCode());
			}
		}

		public function insertarPersona(Persona $persona)
		{

			try
			{
				$statement = $this->pdo->prepare("call up_insertar_persona(?,?,?,?,?,?,?,?)");

				$statement->bindValue(1,$persona->__GET('dni'));
				$statement->bindValue(2,$persona->__GET('nombres'));
				$statement->bindValue(3,$persona->__GET('apellidos'));
				$statement->bindValue(4,$persona->__GET('fecnac'));
				$statement->bindValue(5,$persona->__GET('genero'));
				$statement->bindValue(6,$persona->__GET('direccion'));
				$statement->bindValue(7,$persona->__GET('tipopersona'));
				$statement->bindValue(8,$persona->__GET('correo'));

				$statement -> execute();
			} catch (Exception $e)
			{
				die("insertarPersona function  ->".$e->getMessage());
			}
		}

		public function actualizarPersona(Persona $persona){
			try
			{
				$statement = $this->pdo->prepare("call up_actualizar_persona(?,?,?,?,?,?,?,?)");

				$statement->bindValue(1,$persona->__GET('dni'));
				$statement->bindValue(2,$persona->__GET('nombres'));
				$statement->bindValue(3,$persona->__GET('apellidos'));
				$statement->bindValue(4,$persona->__GET('fecnac'));
				$statement->bindValue(5,$persona->__GET('genero'));
				$statement->bindValue(6,$persona->__GET('direccion'));
				$statement->bindValue(7,$persona->__GET('tipopersona'));
				$statement->bindValue(8,$persona->__GET('correo'));

				$statement -> execute();
			}
			catch (Exception $e)
			{
				die("actualizarPersona function  ->".$e->getMessage()."\nLinea-->".$e->getLine());
			}
		}


		public function eliminarPersona($dni){
			try
			{
				$statement = $this->pdo->prepare("call up_eliminar_persona(?)");
				$statement->bindValue(1,$dni);
				$statement -> execute();

			} catch (Exception $e)
			{
				die("eliminarPersona function  ->".$e->getMessage());
			}
		}

	}
?>
