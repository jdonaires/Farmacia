<?php
class guiaremision
{
	private $nroguia;
	private $puntopartida;
	private $puntollegada;
	private $fecemision;
	private $fecinitraslado;
	private $mottraslado;
	private $idtransporte;

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