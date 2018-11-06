<?php
class Laboratorio
{
	private $RUC;
	private $IdLaboratorio;
	private $RegSanitario;
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