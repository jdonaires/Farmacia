<?php
class Persona
{
	private $dni;
	private $nombres;
	private $apellidos;
	private $correo;
	private $fecnac;
	private $genero;
	private $direccion;
	private $tipopersona;
	public function __GET($x)
	{ 
		return $this->$x; 
	}
	public function __SET($x, $y)
	{ 
		return $this->$x = $y; 
	}
}
?>