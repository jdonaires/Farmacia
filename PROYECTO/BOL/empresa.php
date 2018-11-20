<?php
class Empresa
{
	private $ruc;
	private $razonSocial;
	private $telefono;
	private $direccion;
	private $tipoEmpresa;
	

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