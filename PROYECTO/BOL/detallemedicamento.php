<?php
class dtmedicamento
{
	private $codmed;
	private $codpre;
	private $coddtmedicamento;
	private $psicotropico;
	private $pesounitario;
	private $fecven;
	private $descripcion;

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