<?php
/**
 * Created by PhpStorm.
 * User: juan_
 * Date: 20/11/2018
 * Time: 09:48 PM
 */

require_once("../BOL/tipopresentacion.php");
require_once("tipopresentacionDAO.php");


/*   no es la forma correcta pero ............. /(¬.¬)/           */


class tipopresentacionDAOTest extends PHPUnit_Framework_TestCase
{
    public function testInsertarTipoPresentacion()
    {
        $dao = new TipoPresentacionDAO();
        $tp = new TipoPresentacion();

        $tp->__SET('nombre', 'Vara de Atos');
        $tp->__SET('descripcion', 'Usar contra ursa 2.0');

        $result = $dao->insertarTipoPresentacion($tp);

        $this->assertTrue($result > 0, 'No se puede insertar el registro');
    }

    public function testActualizarTipoPresentacion()
    {
        $dao = new TipoPresentacionDAO();
        $tp = new TipoPresentacion();

        $tp->__SET('id', '3');
        $tp->__SET('nombre', 'Vara de Atos');
        $tp->__SET('descripcion', 'Ursa 1.0 es invulnerable');

        $result = $dao->actualizarTipoPresentacion($tp);

        $this->assertTrue($result > 0, 'No se puede actualizar el registro');
    }

    public function testListarTipoPresentacion()
    {

        $tp = new TipoPresentacion();

        $tp->__SET('nombre', '');


        $dao = new TipoPresentacionDAO();
        $result = $dao->listarTipoPresentacion($tp);

        foreach ($result as $r) {
            echo "\n-->" . $r->Id . ".    " . $r->Nombre . ".    " . $r->Descripcion;
        }

        $this->assertTrue(!empty($result), 'No se pudo listar');
    }

    public function testEliminarTipoPresentacion()
    {
        $dao = new TipoPresentacionDAO();

        $result = $dao->eliminarTipoPresentacion('4');

        $this->assertTrue($result > 0, 'No se puede eliminar el registro');
    }


}
