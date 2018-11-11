<?php 

    use PHPUnit\Framework\TestCase;
    require_once("../personaDAO.php");

    final class PersonaTest extends PHPUnit_Framework_TestCase
    {
        /** @test */
        public function test_sinFuncion()
        {
            $dao= new PersonaDAO();
            $dao->eliminarPersona('33333338');
            $this->assertFalse(false);
        }
    }


?>