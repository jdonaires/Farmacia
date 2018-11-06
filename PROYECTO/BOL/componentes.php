<?php
class componentes
{
	private $coddtmedicamento;
	private $nombre;
	private $tipo;
	private $cantidad;
	private $codunimedida;


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