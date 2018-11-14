<?php
/**
 * Created by PhpStorm.
 * User: juan_
 * Date: 12/11/2018
 * Time: 02:57 AM
 */

require_once("../BOL/empleado.php");
require_once("empleadoDAO.php");

class empleadoDAOTest extends PHPUnit_Framework_TestCase
{

    public function testListarEmpleado()
    {
        $dao = new EmpleadoDAO();
        $emp = new Empleado();

        $emp->__SET('dni','75');

        $result=$dao->listarEmpleado($emp);

        echo("Result:_ -> ".count($result));

        $this->assertTrue(count($result)>0);
    }

    public function testEliminarEmpleado()
    {
        $dni='758071';
        $dao = new EmpleadoDAO();

        $result=$dao->eliminarEmpleado($dni);

        $this->assertTrue($result>0, 'Empleado no eliminado');
    }

    public function testVerificarUsuarioContraseña()
    {
        $user='derogar';
        $pass='debatir';

        $dao = new EmpleadoDAO();

        $result=$dao->verificarUsuarioContraseña($user,$pass);

        $this->assertTrue($result, 'usuario incorrecto');
    }
}
