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
	public function componentes(componentes $componentes)
	{
		try
		{
		$statement = $this->pdo->prepare("CALL insertar_componentes(?,?,?,?,?)");
    	$statement->bindParam(1,$componentes->__GET('coddtMedicamento'));
		$statement->bindParam(2,$componentes->__GET('nombre'));
		$statement->bindParam(3,$componentes->__GET('tipo'));
		$statement->bindParam(4,$componentes->__GET('cantidad'));
		$statement->bindParam(5,$componentes->__GET('codunimedida'));
    $statement -> execute();
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

}
?>
