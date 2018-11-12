<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/empleado.php');
  class empleadoDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }
    public function insertarEmpleado(empleado $empleado)
    {
      try
      {
        $statement = $this->pdo->prepare("CALL up_insertar_empleado(?,?,?,?,?)");
        $statement->bindValue(1,$empleado->__GET('Turno'));
        $statement->bindValue(2,$empleado->__GET('especialidad'));
        $statement->bindValue(3,$empleado->__GET('usuario'));
        $statement->bindValue(4,$empleado->__GET('clave'));
        $statement->bindValue(5,$empleado->__GET('dni'));
        $statement -> execute();
      } catch (Exception $e)
      {
      die("insertarEmpleado function  ->".$e->getMessage());
      }
    }

    public function listarEmpleado(empleado $empleado) {
			try
			{
				$statement = $this->pdo->prepare("call up_listar_empleado(?)");
				$statement->bindValue(1,$empleado->__GET('dni'));
				$statement -> execute();
                $result = (array)$statement->fetchAll(PDO::FETCH_CLASS,"Empleado");
				return $result;
			} catch (Exception $e)
			{
				die("listarEmpleado function  ->".$e->getMessage()." - error message: > ".$e->getLine()." - ".$e->getCode());
			}
		}

  }
?>
