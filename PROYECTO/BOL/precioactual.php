<?php
class precioactual
{
	private $coddtmedicamento;
	private $precio;
	private $estado;
	private $fecactualizacion;

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