<?php
class Transporte
{

	private $RUC;
	private $IdTransporte;
	private $Placa;

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
