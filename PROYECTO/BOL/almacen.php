<?php
class almacen
{
	private $coddtMedicamento;
	private $stockactual;
	private $ubicacion;

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