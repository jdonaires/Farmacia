<?php
/**
 * Created by PhpStorm.
 * User: ariadna
 * Date: 20/11/2018
 * Time: 14:24
 */

require_once("transporteDAO.php");

class transporteDAOTest extends PHPUnit_Framework_TestCase
{

    public function testInsertarTransporte()
    {
        $per = new Empresa();
        $trans = new Transporte();
        $dao = new transporteDAO();

        $trans->__SET('ruc','12365478909');
        $trans->__SET('placa','CCD-322');
        $per->__SET('ruc','12365478909');
        $per->__SET('razonSocial','AlanGarcia');
        $per->__SET('telefono','666333666');
        $per->__SET('direccion','Av siempre Viva');
        $per->__SET('tipoEmpresa','Transporte');

       $count= $dao->insertarTransporte($per,$trans);

        $this->assertTrue($count>0, 'Transporte empresa no insertado');
    }

    public function testListarTransporte(){
        $trans = new Transporte();
        $dao = new transporteDAO();


        $result=$dao->listarTransporte($trans);

        echo("Result:_ -> ".count($result));

        $this->assertTrue(count($result)>0);
    }
}
