<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/unidadmedida.php');

class UnidadMedidaDAO
{
    private $pdo;

    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }

    public function insertarUnidadMedida(UnidadMedida $unidadMedida)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_insertar_unidad_medida(?)");
            $statement->bindValue(1, $unidadMedida->__GET('descripcion'));
            $statement->execute();

            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die('insertarUnidadMedida -->err ->' . $e->getMessage());
        }
    }

    public function actualizarUnidadMedida(UnidadMedida $unidadMedida)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_actualizar_unidad_medida(?,?)");
            $statement->bindValue(1, $unidadMedida->__GET('id'));
            $statement->bindValue(2, $unidadMedida->__GET('descripcion'));
            $statement->execute();

            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die('actualizarUnidadMedida -->err ->' . $e->getMessage());
        }
    }

    public function eliminarUnidadMedida($id)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_eliminar_unidad_medida(?)");
            $statement->bindParam(1, $id);
            $statement->execute();

            $count = $statement->rowCount();

            return $count;

        } catch (Exception $e) {
            die('eliminarUnidadMedida -->err ->' . $e->getMessage());
        }
    }

    public function listarUnidadMedida(UnidadMedida $unidadMedida)
    {
        try {
            $statement = $this->pdo->prepare("call up_listar_unidad_medida(?)");

            $statement->bindValue(1, $unidadMedida->__GET('descripcion'));
            $statement->execute();

            $result =(array)$statement->fetchAll(PDO::FETCH_CLASS, "UnidadMedida");

            return $result;

        } catch (Exception $e) {
            die ('eliminarUnidadMedida -->err ->' . $e->getMessage());
        }
    }
}

?>
