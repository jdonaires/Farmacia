<?php
class medicamento
{
	private $codmed;
	private $nombre;
	private $nombrelaboratorio;
	private $idlaboratorio;


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