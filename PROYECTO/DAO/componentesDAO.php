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

    public function insertarComponente(Componentes $componente)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_insertar_componentes(?,?,?,?,?)");
            $statement->bindValue(1, $componente->__GET('coddtMedicamento'));
            $statement->bindValue(2, $componente->__GET('nombre'));
            $statement->bindValue(3, $componente->__GET('tipo'));
            $statement->bindValue(4, $componente->__GET('cantidad'));
            $statement->bindValue(5, $componente->__GET('codunimedida'));
            $statement->execute();


        } catch (Exception $e) {
            die('insertarComponente -> err ->'.$e->getMessage());
        }
    }

}

?>
