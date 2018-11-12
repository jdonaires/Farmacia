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
	public function insertarEmpresa(empresa $empresa)
	{
		try
		{
			$statement = $this->pdo->prepare("CALL up_insertar_empresa(?,?,?,?,?)");
			$statement->bindValue(1,$empresa->__GET('RUC'));
			$statement->bindValue(2,$empresa->__GET('RazonSocial'));
			$statement->bindValue(3,$empresa->__GET('Telefono'));
			$statement->bindValue(4,$empresa->__GET('Direccion'));
			$statement->bindValue(5,$empresa->__GET('TipoEmpresa'));
			$statement -> execute();
		} catch (Exception $e)
		{
			die("insertarEmpresa function  ->".$e->getMessage());
		}
	}

	public function listarEmpresa(empresa $empresa)
	{
		try
		{
			$result = array();
			$statement = $this->pdo->prepare("call up_listar_empresa(?)");
			$statement->bindParam(1,$empresa->__GET('RUC'));
			$statement->execute();
			foreach($statement->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$emp = new Transporte();
				$emp->__SET('RUC', $r->RUC);
				$emp->__SET('RazonSocial', $r->razonsocial);
				$emp->__SET('Telefono', $r->telefono);
				$emp->__SET('Direccion', $r->direccion);
				$emp->__SET('TipoEmpresa', $r->tipoempresa);
				$result[] = $emp;
			}
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function eliminarEmpresa($RUC){
		try
		{
			$statement = $this->pdo->prepare("call up_eliminar_empresa(?)");
			$statement->bindParam(1,$RUC);
			$statement -> execute();

		} catch (Exception $e)
		{
			die("eliminarEmpresa function  ->".$e->getMessage());
		}
	}

}
?>
