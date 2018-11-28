<?php

class TipoPresentacion
{
	private $id;
	private $nombre;
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
