<?php

require_once('../DAL/DBAccess.php');
require_once("../BOL/tipopresentacion.php");

/**
 * Class tipopresentacionDAO
 */
class TipoPresentacionDAO
{
    private $pdo;

    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }


    /**
     * @param TipoPresentacion $tipoPresentacion Clase
     * @return array  Un array con las clases TipoPresentacion.
     */
    public function listarTipoPresentacion(TipoPresentacion $tipoPresentacion)
    {
        try {
            $statement = $this->pdo->prepare("call up_listar_tipo_presentacion(?)");

            $statement->bindValue(1, $tipoPresentacion->__GET('nombre'));
            $statement->execute();

            $result = $statement->fetchAll(PDO::FETCH_CLASS, "TipoPresentacion");

            return $result;

        } catch (Exception $e) {
            die ('listarTipoPresentacion -->err ->' . $e->getMessage());
        }
    }

    /**
     * @param TipoPresentacion $tipoPresentacion Clase
     * @return int Devuelve el número de filas afectadas, 0 si no se ha realizado ningún cambio.
     */
    public function insertarTipoPresentacion(TipoPresentacion $tipoPresentacion)
    {
        try {
            $statement = $this->pdo->prepare("CALL up_insertar_tipo_presentacion(?,?)");
            $statement->bindValue(1, $tipoPresentacion->__GET('nombre'));
            $statement->bindValue(2, $tipoPresentacion->__GET('descripcion'));
            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("insertarTipopresentacion function  ->" . $e->getMessage());
        }
    }

    /**
     * @param TipoPresentacion $tipoPresentacion Clase
     * @return int Devuelve el número de filas afectadas, 0 si no se ha realizado ningún cambio.
     */
    public function actualizarTipoPresentacion(TipoPresentacion $tipoPresentacion)
    {
        try {
            $statement = $this->pdo->prepare("call up_actualizar_tipo_presentacion(?,?,?)");
            $statement->bindValue(1, $tipoPresentacion->__GET('id'));
            $statement->bindValue(2, $tipoPresentacion->__GET('nombre'));
            $statement->bindValue(3, $tipoPresentacion->__GET('descripcion'));
            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("actualizarTipoPresentacion function  ->" . $e->getMessage());
        }
    }

    /**
     * @param int $id Variable con el id a eliminar
     * @return int Devuelve el número de filas afectadas, 0 si no se ha realizado ningún cambio.
     */
    public function eliminarTipoPresentacion($id)
    {
        try {
            $statement = $this->pdo->prepare("call up_eliminar_tipo_presentacion(?)");
            $statement->bindParam(1, $id);
            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("eliminarTipoPresentacion function  ->" . $e->getMessage());
        }
    }
}

?>
