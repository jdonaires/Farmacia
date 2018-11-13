<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/componentes.php');
class ComponentesDAO
{
	private $pdo;
	public function __CONSTRUCT()
	{
			$dba = new DBAccess();
			$this->pdo = $dba->get_connection();
	}
	public function insertarComponentes(componentes $componentes)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL up_insertar_componentes(?,?,?,?,?)");
    $statement->bindValue(1,$componentes->__GET('coddtMedicamento'));
		$statement->bindValue(2,$componentes->__GET('nombre'));
		$statement->bindValue(3,$componentes->__GET('tipo'));
		$statement->bindValue(4,$componentes->__GET('cantidad'));
		$statement->bindValue(5,$componentes->__GET('codunimedida'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>
