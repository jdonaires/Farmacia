<?php
require_once('../DAL/DBAccess.php');
require_once('../BOL/transporte.php');
require_once('../BOL/empresa.php');

class transporteDAO
{
    private $pdo;

    public function __CONSTRUCT()
    {
        $dba = new DBAccess();
        $this->pdo = $dba->get_connection();
    }

    public function insertarTransporte(Empresa $empresa, Transporte $transporte)
    {
        try {

            $statement = $this->pdo->prepare("call up_insertar_transporte_empresa(?,?,?,?,?,?,?);");
            $statement->bindValue(1, $transporte->__GET('ruc'));
            $statement->bindValue(2, $transporte->__GET('placa'));
            $statement->bindValue(3, $empresa->__GET('ruc'));
            $statement->bindValue(4, $empresa->__GET('razonSocial'));
            $statement->bindValue(5, $empresa->__GET('telefono'));
            $statement->bindValue(6, $empresa->__GET('direccion'));
            $statement->bindValue(7, $empresa->__GET('tipoEmpresa'));

            $statement->execute();

            return $statement->rowCount();

        } catch (Exception $e) {
            die("insertarTransporte --> err -->" . $e->getMessage());
        }
    }


    public function listarTransporte(transporte $transporte)
    {
        try {
            $result = array();
            $statement = $this->pdo->prepare("call up_listar_transporte_empresa(?)");

            $statement->bindValue(1, $transporte->__GET('ruc'));
            $statement->execute();

            foreach ($statement->fetchAll(PDO::FETCH_OBJ) as $r) {
                $transpor = new Transporte();
                $transpor->__SET('ruc', $r->RUC);
                $transpor->__SET('idtransporte', $r->idtransporte);
                $transpor->__SET('placa', $r->placa);
                $result[] = $transpor;
            }
            return $result;
        } catch (Exception $e) {
            die("listarTransporte -> err -->" . $e->getMessage());
        }
    }

}

?>
