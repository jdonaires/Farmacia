<?php 

    use PHPUnit\Framework\TestCase;
    require_once("../personaDAO.php");

    final class PersonaTest extends PHPUnit_Framework_TestCase
    {
        /** @test */
        public function test_sinFuncion()
        {
            $per = new Persona();
            $ni='1';
            $per->__SET('dni',$ni);

            $dao= new PersonaDAO();
            $result=$dao->listarPersona($per);
            $this->assertTrue(!empty($resultado));
        }
    }


?>