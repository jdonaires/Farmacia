<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/almacen.php');

class AlmacenDAO
{
    private $pdo;

    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }

    public function insertarAlmacen(Almacen $almacen)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_insertar_almacen(?,?,?)");
            $statement->bindValue(1, $almacen->__GET('coddtMedicamento'));
            $statement->bindValue(2, $almacen->__GET('stockactual'));
            $statement->bindValue(3, $almacen->__GET('ubicacion'));

            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("insertarAlmacen function  ->" .$e->getMessage());
        }
    }

    public function actualizarAlmacen(Almacen $almacen)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_actualizar_almacen(?,?,?,?)");

            $statement->bindValue(1, $almacen->__GET('id'));
            $statement->bindValue(2, $almacen->__GET('coddtMedicamento'));
            $statement->bindValue(3, $almacen->__GET('stockactual'));
            $statement->bindValue(4, $almacen->__GET('ubicacion'));

            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("actualizarAlmacen function  ->" . $e->getMessage());
        }
    }

    public function listarAlmacen(Almacen $almacen)
    {
        try {
            $statement = $this->pdo->prepare("call up_listar_almacen(?)");

            $statement->bindValue(1, $almacen->__GET('coddtMedicamento'));
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_CLASS, "Almacen");
            return $result;

        } catch (Exception $e) {
            die("listarAlmacen function  ->" . $e->getMessage());
        }
    }

    public function eliminarAlmacen($id)
    {
        try {
            $statement = $this->pdo->prepare("call up_eliminar_almacen(?)");

            $statement->bindParam(1, $id);
            $statement->execute();
            $result = $statement->rowCount();

            return $result;

        } catch (Exception $e) {
            die("eliminarAlmacen function  ->" . $e->getMessage());
        }
    }

}

?>
