<?php
class Empresa
{
	private $RUC;
	private $RazonSocial;
	private $Telefono;
	private $Direccion;
	private $TipoEmpresa;
	

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