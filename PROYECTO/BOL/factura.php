<?php
class factura
{
	private $iddetallegm;
	private $costounitario;
	private $costototal;
	private $igv;
	private $subtotal;


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