<?php
class Empleado
{
	private $idEmpleado;
	private $Turno;
	private $especialidad;
	private $usuario;
	private $clave;
	private $dni;

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