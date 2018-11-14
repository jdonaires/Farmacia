<?php
  require_once('../DAL/DBAccess.php');
  require_once('../BOL/posologia.php');

  class PosologiaDAO
  {
    private $pdo;
    public function __CONSTRUCT()
    {
      $dba = new DBAccess();
      $this->pdo = $dba->get_connection();
    }
    public function Registrar(posologia $posologia)
    {
      try {
        $statement = $this->pdo->prepare("insert into posologia values(?,?,?)");
        $statement->bindValue(1,$posologia->__GET('coddtmedicamento'));
        $statement->bindValue(2,$posologia->__GET('dosis'));
        $statement->bindValue(3,$posologia->__GET('indicaciones'));
        $statement -> execute();
      } catch (Exception $e)
      {
        die($e->getMessage());
      }

    }

    public function actualizarPosologia(posologia $posologia){
			try
			{
				$statement = $this->pdo->prepare("call up_actualizar_posologia(?,?,?)");

				$statement->bindValue(1,$posologia->__GET('coddtmedicamento'));
				$statement->bindValue(2,$posologia->__GET('dosis'));
				$statement->bindValue(3,$posologia->__GET('indicaciones'));
				$statement -> execute();

			}
			catch (Exception $e)
			{
				die($e->getMessage());
			}
		}


     public function eliminarPosologia($coddtmedicamento){
    	try
    	{
    	  $statement = $this->pdo->prepare("call up_eliminar_posologia(?)");
    		$statement->bindValue(1,$coddtmedicamento);
    		$statement -> execute();

    	}
      catch (Exception $e)
    	{
    		die("eliminarPosologia function  ->".$e->getMessage());
    	}
    }


  }
?>
