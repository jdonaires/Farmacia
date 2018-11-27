<?php
class Empresa
{
	private $ruc;
	private $razonsocial;
	private $telefono;
	private $direccion;
	private $tipoempresa;


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
