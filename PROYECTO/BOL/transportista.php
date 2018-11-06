<?php
class transportista
{
	private $DNI;
	private $idtransporte;
	private $nrolicencia;

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