<?php
class posologia
{
	private $coddtmedicamento;
	private $dosis;
	private $indicaciones;


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
