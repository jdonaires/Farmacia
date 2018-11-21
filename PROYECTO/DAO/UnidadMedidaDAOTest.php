<?php
/**
 * Created by PhpStorm.
 * User: juan_
 * Date: 13/11/2018
 * Time: 12:53 AM
 */

require_once("../BOL/unidadmedida.php");
require_once("unidadmedidaDAO.php");

class UnidadMedidaDAOTest extends PHPUnit_Framework_TestCase
{


    public function testInsertarUnidadMedida()
    {
        $dao= new UnidadMedidaDAO();
        $undMed= new UnidadMedida();

        $undMed->__SET('descripcion','lt');

        $result = $dao->insertarUnidadMedida($undMed);

        $this->assertTrue($result>0,'No se puedo insertar el registro');

    }

    public function testActualizarUnidadMedida()
    {
        $dao= new UnidadMedidaDAO();
        $undMed= new UnidadMedida();


        $undMed->__SET('id',3);
        $undMed->__SET('descripcion','Lt');

        $result = $dao->actualizarUnidadMedida($undMed);

        $this->assertTrue($result>0,'No se puedo actualizar el registro');
    }

    public function testListarUnidadMedida()
    {

        $undMed= new UnidadMedida();

        $undMed->__SET('descripcion','');


        $dao= new UnidadMedidaDAO();
        $result = $dao->listarUnidadMedida($undMed);

       foreach ($result as $r){
            echo "\n-->".$r->Id.".    ".$r->Descripcion;
        }

        $this->assertTrue(!empty($result),'No se puedo listar');
    }

    public function testEliminarUnidadMedida()
    {
        $dao = new UnidadMedidaDAO();

        $dao->eliminarUnidadMedida(3);

        $this->assertTrue(true);
    }
}
