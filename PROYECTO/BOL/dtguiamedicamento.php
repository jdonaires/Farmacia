<?php
class dtguiamedicamento
{
	private $nroguia;
	private $codmedicamento;
	private $iddetallegm;
	private $cantidad;
	private $pesototal;
	private $lote;
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